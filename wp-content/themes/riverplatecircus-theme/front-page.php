<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package riverplatecircus-theme
 */

get_header();
// get_template_directory_uri
?>

	<main id="primary" class="site-main">
		<section class="hero">
			<div class="hero__wrap">
				<h1 class="title">River Plate Circus</h1>
				<div class="content">
					<h1 class="content__title">River Plate Circus</h1>
					<p class="content__subtitle">Donde los sueños se hacen <strong>realidad</strong></p>
					<a class="content__btn" href="">Compra tus entradas</a>
				</div>
				<div class="decoration">
					<img class="blob" src="<?php echo get_template_directory_uri() ?>/img/svg/blobanimation.svg" alt="">
					<img class="man" src="<?php echo get_template_directory_uri() ?>/img/png/colgado-1.png" alt="">
				</div>
			</div>
		</section>



	</main>

<?php

// get_footer();
