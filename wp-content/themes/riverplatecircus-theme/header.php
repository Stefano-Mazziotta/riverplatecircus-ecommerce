<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package riverplatecircus-theme
 */

	$urlHome = get_home_url();
	$urlEvents = $urlHome . "/eventos";
	$urlNosotros = $urlHome . "/#Nosotros";
	$urlCart =  $urlHome . "/carrito";
	$urlFaq =  $urlHome . "/faq";
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">

		<div class="header-wrap">
			
			<div class="header__logo"> 
				<?php the_custom_logo(); ?>
			</div>

			<i id="hamburger-menu" class="fa-solid fa-bars"></i>
			
			<nav class="header__desktop-nav">
				<a class="nav__item" href="<?php echo $urlHome ?>">Inicio</a>
				<a class="nav__item" href="<?php echo $urlEvents ?>">Eventos</a>
				<a class="nav__item" href="<?php echo $urlNosotros ?>">Nosotros</a>
				<a class="nav__item" href="<?php echo $urlFaq ?>">Preguntas frecuentes</a>
				
				
				<i class="fa-solid fa-cart-shopping"></i>
				
				
				</a>
			</nav>
		</div>
		
	</header>
	
	<div class="mobile-nav-wrap">
		<nav id="mobile-nav" class="mobile-nav">
			<a class="nav__item" href="<?php echo $urlHome ?>">Inicio</a>
			<a class="nav__item" href="<?php echo $urlEvents ?>">Eventos</a>
			<a class="nav__item" href="<?php echo $urlNosotros ?>">Nosotros</a>
			<a class="nav__item" href="<?php echo $urlFaq ?>">Preguntas frecuentes</a>
			 
			
			<i class="fa-solid fa-cart-shopping"></i>
			
			</a>
		</nav>
	</div>
