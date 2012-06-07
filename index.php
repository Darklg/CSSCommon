<!DOCTYPE HTML>
<html lang="fr-FR">
	<head>
		<title>CSS Normalize - Framework CSS</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
		<!-- Styles de base -->
		<link rel="stylesheet" href="css/reset.css?v=1.0.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize.css?v=1.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-common.css?v=1.4" type="text/css" />
		<!-- Modules -->
		<link rel="stylesheet" href="css/normalize-buttons.css?v=1.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-forms.css?v=1.3" type="text/css" />
		<link rel="stylesheet" href="css/normalize-tables.css?v=1.0" type="text/css" />
		<link rel="stylesheet" href="css/normalize-grid.css?v=1.1.0.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-messages.css?v=1.1.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-code.css?v=1.0.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-gallery.css?v=1.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-push.css?v=1.0.3" type="text/css" />
		<link rel="stylesheet" href="css/normalize-modeles.css?v=1.3.5" type="text/css" />
		<link rel="stylesheet" href="css/normalize-layouts.css?v=1.1" type="text/css" />
		<link rel="stylesheet" href="css/normalize-tabs.css?v=1.0" type="text/css" />
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<!--[if lt IE 7 ]><body class="is_ie6 lt_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]--> 
	<!--[if IE 7 ]><body class="is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]--> 
	<!--[if IE 8 ]><body class="is_ie8 lt_ie9 lt_ie10"><![endif]--> 
	<!--[if IE 9 ]><body class="is_ie9 lt_ie10"><![endif]--> 
	<!--[if gt IE 9]><body class="is_ie10"><![endif]--> 
	<!--[if !IE]><!--> <body class=""><!--<![endif]-->
	<div id="main-container">
		
		<header id="header">
			<h1>CSS Normalize - Framework CSS</h1>
		</header>

    	<?php include dirname(__FILE__).'/inc/pages/about.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-forms.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-tables.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-grid.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-messages.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-push.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-modeles.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-layouts.php'; ?>
    	<?php include dirname(__FILE__).'/inc/pages/normalize-tabs.php'; ?>

    </div>
    
	<footer class="fixed-footer">
	<nav>
		<ul>
			<li><a href="#le-content">Contenu</a></li>
			<li><a href="#normalize-forms">Formulaires</a></li>
			<li><a href="#normalize-tables">Tables</a></li>
			<li><a href="#normalize-grid">Grilles</a></li>
			<li><a href="#normalize-messages">Messages d'avertissement</a></li>
			<li><a href="#normalize-code">Présentation de code</a></li>
			<li><a href="#normalize-gallery">Galerie</a></li>
			<li><a href="#normalize-push">Pushs</a></li>
			<li><a href="#normalize-modeles">Mod&egrave;les</a></li>
			<li><a href="#normalize-layouts">Layouts</a></li>
			<li><a href="#normalize-tabs">Onglets</a></li>
		</ul>
	</nav>
	</footer>
	
	<a href="http://github.com/darklg/CSSNormalize"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/7afbc8b248c68eb468279e8c17986ad46549fb71/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub"></a>
	
	<script>
	function $(id){
		return document.getElementById(id);
	}
	
	$('set_form_float').addEventListener('click',function(){
		$('form_demo').className = 'cssn_form float_form';
	}); 
	
	$('set_form_block').addEventListener('click',function(){
		$('form_demo').className = 'cssn_form block_form';
	});
	</script>
	
	
	</body>
</html>
