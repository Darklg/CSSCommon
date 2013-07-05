<!DOCTYPE html>
<!--[if lt IE 8 ]><html dir="ltr" lang="fr-FR" class="is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="fr-FR" class="is_ie8 lt_ie9 lt_ie10"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="fr-FR" class="is_ie9 lt_ie10"><![endif]-->
<!--[if gt IE 9]><html dir="ltr" lang="fr-FR" class="is_ie10"><![endif]-->
<!--[if !IE]><!--><html dir="ltr" lang="fr-FR"><!--<![endif]-->
    <head>
        <title>CSS Common - Framework CSS</title>
        <meta charset="UTF-8" />

        <!-- Magie des navigateurs -->
        <?php if($is_responsive){
            ?><meta name="viewport" content="width=device-width" /><?php
        }else {
            ?><meta name="viewport" content="width=1020" /><?php
        } ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!-- Feuilles CSS Common -->
        <link rel="stylesheet" href="css/main.css?v=<?php echo round(time()/10); ?>" type="text/css" />

        <!-- Scripts -->
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <script src="js/functions.js"></script>
    </head>

    <body>

    <div id="main-container" <?php echo $is_responsive ? 'class="cssc-is-responsive"' : ''; ?>>
        <?php if(!$is_responsive){ ?>
        <header id="header" class="centered-container">
            <h1>CSS Common - Framework CSS</h1>
        </header>
        <nav class="cssc-mainnav centered-container">
            <ul class="cssc-mainmenu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?p=cssc-forms">Formulaires</a></li>
                <li><a href="index.php?p=cssc-grid">Grilles</a></li>
                <li><a href="index.php?p=cssc-navigation">Navigation</a></li>
                <li><a href="index.php?p=cssc-tables">Tableaux</a></li>
                <li><a href="index.php?p=cssc-layouts">Layouts</a></li>
            </ul>
        </nav>
        <?php } ?>