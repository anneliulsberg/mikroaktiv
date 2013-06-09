<!DOCTYPE HTML>
<html lang="nb-no">

	<head>
		<meta charset="UTF-8">
		<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name') ?></title>
		<link rel="Shortcut Icon" type="image/ico" href="images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
	</head>
	
	<body>
		<header><a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/menu-header-logo.png" alt="mikroaktiv" width="338" height="86"></a></header>
		
		<nav>
			<ul>
				<li><a href="/aktiviteter">Aktiviteter</a></li>
				<li><a href="/sanger">Sanger</a></li>
				<li><a href="/rim-og-regler">Rim &amp; regler</a></li>
				<li><a href="/eventyr">Eventyr</a></li>
			</ul>
		</nav>