<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php if ( function_exists('yoast_breadcrumb') )
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<div id="single-post" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">

    <!--<div id="image-article">
      <?php if ( has_post_thumbnail() ) : ?>
        <div>
          <div>
            <?php the_post_thumbnail( '', array('class' => 'th') ); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>-->

    <?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    ?>

    <div id="image-article" style="background-image:url(<?php echo $src[0]; ?>)">

    </div>

		<div class="petit-wrap">

      <header>
        <div id="titre">
          <div class="bubbz"></div>
          <hr>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="bubbz"></div>
          <hr>
        </div>
        <div class="text-center"><?php foundationpress_entry_meta(); ?></div>
      </header>

      <div class="row">

        <div class="small-12 columns">

      		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
      		<div class="entry-content">

      		<?php the_content(); ?>
      		</div>
      		<footer>
      			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
      			<p><?php the_tags(); ?></p>
      		</footer>
      		<?php do_action( 'foundationpress_post_before_comments' ); ?>
      		<?php comments_template(); ?>
      		<?php do_action( 'foundationpress_post_after_comments' ); ?>
        </div>

        <div class="small-4 columns" style="display:none">
          <div class="droite">
            <div id="contain">
              <h4>A propos</h4>
              <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMake</p>
            </div>
            <div id="contain">Bonjour</div>
          </div>
        </div>
      </div>
		</div>
	</div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<?php get_footer();
