<?php
$is_responsive = false;
$p = 'about';
$inc_folder = dirname( __FILE__ ).'/pages/';
$excluded_pages = array(
    'about',
    '404',
    'responsive-layout',
);

// Valid way to ask for a page
if ( isset( $_GET['p'] ) && preg_match( '/([a-z0-9-]+)/', $_GET['p'] ) ) {
    // Checking page correct existence
    $p = '404';
    if ( file_exists( $inc_folder.$_GET['p'].'.php' ) && !in_array( $_GET['p'], $excluded_pages ) ) {
        $p = $_GET['p'];
    }
}

$include_page = $inc_folder . $p . '.php';