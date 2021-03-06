<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="element" style="background-image:url(<?php echo $src['0']; ?>)">
    <div class="fondu">
      <div class="ccenter">
        <div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
          <header>
            <div class="text-center"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>

            <div class="text-center">
              <?php foundationpress_entry_meta(); ?>
            </div>
          </header>
          <!--<div class="entry-content">

            <?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
          </div>
          <footer>
            <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
          </footer>-->
        </div>
      </div>
    </div>
</div>
