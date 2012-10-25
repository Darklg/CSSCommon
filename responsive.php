<!DOCTYPE HTML>
<html lang="fr-FR">
    <head>
        <title>CSS Normalize - Framework CSS</title>
        <meta charset="UTF-8" />

        <!-- Magie des navigateurs -->
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- Feuilles Normalize -->
        <link rel="stylesheet" href="css/main.css?v=201210251839" type="text/css" />

        <!-- Scripts -->
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <script src="js/functions.js"></script>
    </head>

    <!--[if lt IE 7 ]><body class="is_ie6 lt_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]-->
    <!--[if IE 7 ]><body class="is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]-->
    <!--[if IE 8 ]><body class="is_ie8 lt_ie9 lt_ie10"><![endif]-->
    <!--[if IE 9 ]><body class="is_ie9 lt_ie10"><![endif]-->
    <!--[if gt IE 9]><body class="is_ie10"><![endif]-->
    <!--[if !IE]><!--> <body class=""><!--<![endif]-->

    <div id="main-container" class="cssn-is-responsive">

        <header id="header">
            <h1>CSS Normalize - Framework CSS</h1>
            <p>Demo utilisant le Responsive layout de CSSNormalize.<br /> Work in progress. <a href="index.php">Retour au framework</a>.</p>
        </header>

        <?php include dirname(__FILE__).'/inc/pages/responsive-layout.php'; ?>

    </div>

    <a href="http://github.com/darklg/CSSNormalize" id="fork_me"><img src="images/fork_me.png" alt="Fork me on GitHub" /></a>
    <script src="js/events.js"></script>
    </body>
</html>
