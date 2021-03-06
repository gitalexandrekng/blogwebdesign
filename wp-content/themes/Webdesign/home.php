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
	<?php the_widget( 'WP_Widget_Search' ); ?> 
<div id="page-social">
  <div class="row">
    <div class="small-12 columns">
        <div class="centered">
            <div class="margin">
                Vous ne suivez pas encore mes superbes publications?
            </div>
            <ul id="reseaux">
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png"></li>
              <li><a href="http://instagram.com/alexandrek_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png"></a></li>
              <li><a href="http://twitter.com/alexandrekng" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.png"></a></li>
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png"></li>
            </ul>
        </div>
    </div>
  </div>
</div>

<div id="page" role="main">
	<div class="row">
    <div class="small-12 columns" id="colonne">
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
  	</div>
    <!--
    <div class="small-4 columns">
      <?php get_sidebar(); ?>
    </div>
  -->
	</div>


</div>

<?php get_footer();
