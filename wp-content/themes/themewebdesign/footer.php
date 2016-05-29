<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

		<?php include('custom-footer.php'); ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
	$("#slider-home").owlCarousel({
		items:1,
	});
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
