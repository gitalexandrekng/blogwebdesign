<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- Slider
====================-->
<div class="slider-container">
    <div class="owl-carousel" id="slider-home">
        <div class="item">
            <div class="in" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/hands.jpg)">
                <div class="fade">
                    <div class="inzer">
                        <h3>Titre slider</h3>
                        <div class="texte">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500</div>
                        <a href="" class="butz hvr-sweep-to-top">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item"><div class="in" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/header.jpg)">dezdzedzaed</div></div>
        <div class="item"><div class="in" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/walpp.jpg)">dezdzedzaed</div></div>
    </div>
</div>

<!-- Focus
=====================-->
<!--<div class="focus row">
    <div class="large-4 columns"><div class="focus-in"></div></div>
    <div class="large-4 columns"><div class="focus-in"></div></div>
    <div class="large-4 columns"><div class="focus-in"></div></div>
</div>-->

<div id="page" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'home', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>

</div>

<?php get_footer();
