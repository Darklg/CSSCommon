<!DOCTYPE HTML>
<html lang="fr-FR">
    <head>
        <title>CSS Common - Framework CSS</title>
        <meta charset="UTF-8" />

        <!-- Magie des navigateurs -->
        <meta name="viewport" content="width=1020" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- Feuilles CSS Common -->
        <link rel="stylesheet" href="css/main.css?v=<?php echo round(time()/10); ?>" type="text/css" />

        <!-- Scripts -->
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <script src="js/functions.js"></script>
    </head>

    <!--[if lt IE 8 ]><body class="is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]-->
    <!--[if IE 8 ]><body class="is_ie8 lt_ie9 lt_ie10"><![endif]-->
    <!--[if IE 9 ]><body class="is_ie9 lt_ie10"><![endif]-->
    <!--[if gt IE 9]><body class="is_ie10"><![endif]-->
    <!--[if !IE]><!--> <body class=""><!--<![endif]-->
    <div id="main-container">

        <header id="header">
            <h1>CSS Common - Framework CSS</h1>
        </header>

        <?php include dirname(__FILE__).'/inc/pages/about.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-common.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-forms.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-tables.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-grid.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-messages.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-code.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-gallery.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-push.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-modeles.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-layouts.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-tabs.php'; ?>
        <?php include dirname(__FILE__).'/inc/pages/cssc-images.php'; ?>

    </div>

    <footer class="fixed-footer">
    <nav>
        <ul>
            <li><a href="#cssc-common">Récurrents</a></li>
            <li><a href="#cssc-forms">Formulaires</a></li>
            <li><a href="#cssc-tables">Tables</a></li>
            <li><a href="#cssc-grid">Grilles</a></li>
            <li><a href="#cssc-messages">Messages d'avertissement</a></li>
            <li><a href="#cssc-code">Présentation de code</a></li>
            <li><a href="#cssc-gallery">Galerie</a></li>
            <li><a href="#cssc-push">Pushs</a></li>
            <li><a href="#cssc-modeles">Mod&egrave;les</a></li>
            <li><a href="#cssc-layouts">Layouts</a></li>
            <li><a href="#cssc-tabs">Onglets</a></li>
            <li><a href="#cssc-images">Images</a></li>
        </ul>
    </nav>
    </footer>

    <a href="http://github.com/darklg/CSSCommon" id="fork_me"><img src="images/fork_me.png" alt="Fork me on GitHub" /></a>
    <script src="js/events.js"></script>
    </body>
</html>
