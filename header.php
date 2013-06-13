<?php $t_uri = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="nb-no">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
		<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name') ?></title>
		<?php wp_head(); ?>
		<link rel="Shortcut Icon" type="image/ico" href="<?php echo $t_uri ?>/images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>		
		<link rel="stylesheet" href="<?php echo $t_uri ?>/css/phone.css" media="only screen and (min-width: 320px) and (max-width: 767px)">
		<link rel="stylesheet" href="<?php echo $t_uri ?>/css/tablet.css" media="only screen and (min-width: 768px) and (max-width: 959px)">
		<link rel="stylesheet" href="<?php echo $t_uri ?>/css/desktop.css" media="only screen and (min-width: 960px)">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="<?php echo $t_uri ?>/js/jquery.cycle.js" type="text/javascript"></script>
		<script src="<?php echo $t_uri ?>/js/main.js" type="text/javascript"></script>
	</head>
	
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<header><a href="/">mikroaktiv</a></header>
		
		<?php if (is_home()) : ?>
			<ul id="slideshow">
				<li><a href="/aktiviteter/bygge-med-klosser/"><img src="<?php echo $t_uri ?>/images/slideshow-blocks.jpg" alt="Byggeklosser" width="1490" height="512"></a></li>	
				<li><a href="/aktiviteter/tegne-med-kritt/"><img src="<?php echo $t_uri ?>/images/slideshow-chalk.jpg" alt="Krittegning" width="1490" height="512"></a></li>
				<li><a href="/aktiviteter/fargestifter/"><img src="<?php echo $t_uri ?>/images/slideshow-crayon.jpg" alt="Fargestifter" width="1490" height="512"></a></li>
				<li><a href="/aktiviteter/fingermaling/"><img src="<?php echo $t_uri ?>/images/slideshow-fingerpaint.jpg" alt="Fingermaling" width="1490" height="512"></a></li>	
			</ul>
			<div id="pager"></div>
		<?php endif; ?>
		
		<nav>
			<?php wp_nav_menu(array('container' => false)); ?>
		</nav>
		
		<div id="page">
			<div id="content">