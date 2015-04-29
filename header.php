<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	<header class="header" role="banner">
		<div class="header__menu">
			<div class="container">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">Singolo<span>*</span></a>
				</div>
				<button class="toggle-menu">
					<i class="fa fa-bars"></i>
				</button>
				<nav class="navbar" role="navigation">

					<ul>
						<li class="navbar__item">
							<a href="index.html">Home</a>
						</li>
						<li class="navbar__item">
							<a href="#services">Services</a>
						</li>
						<li class="navbar__item">
							<a href="#portfolio">Portfolio</a>
						</li>
						<li class="navbar__item">
							<a href="#about">About</a>
						</li>
						<li class="navbar__item">
							<a href="#contact">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>	
	