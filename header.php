<?php $t_uri = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="nb-no">

	<head>
		<meta charset="UTF-8">
		<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name') ?></title>
		<link rel="Shortcut Icon" type="image/ico" href="<?php echo $t_uri ?>/images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo $t_uri ?>/style.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="<?php echo $t_uri ?>/js/jquery.cycle.js" type="text/javascript"></script>
		<script src="<?php echo $t_uri ?>/js/main.js" type="text/javascript"></script>
		<?php wp_head(); ?>		
	</head>
	
	<body class="<?php echo is_home() ? 'home' : '' ?>">
		<header><a href="/">mikroaktiv</a></header>
		
		<?php if (is_home()) : ?>
			<ul id="slideshow">
				<li><a href="/aktiviteter"><img src="<?php echo $t_uri ?>/images/slideshow-blocks.jpg"></a></li>	
				<li><a href="/aktiviteter"><img src="<?php echo $t_uri ?>/images/slideshow-chalk.jpg"></a></li>
				<li><a href="/aktiviteter"><img src="<?php echo $t_uri ?>/images/slideshow-crayon.jpg"></a></li>
				<li><a href="/aktiviteter"><img src="<?php echo $t_uri ?>/images/slideshow-fingerpaint.jpg"></a></li>	
			</ul>
		<?php endif; ?>
		
		<nav>
			<ul>
				<li><a href="/aktiviteter">Aktiviteter</a></li>
				<li><a href="/sanger">Sanger</a></li>
				<li><a href="/rim-og-regler">Rim &amp; regler</a></li>
				<li><a href="/eventyr">Eventyr</a></li>
			</ul>
		</nav>
		
		<div id="page">
			<div id="content">