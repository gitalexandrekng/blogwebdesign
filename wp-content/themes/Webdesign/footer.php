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
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<div id="footer-one">
		    <div class="content">
                <div id="title">Instagram</div>
		        <iframe src="http://widget.websta.me/in/alexandrek_/?r=1&w=5&h=2&b=0&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:525px; height: 210px" ></iframe> <!-- websta - websta.me -->
		    </div>
		</div>
        <div id="footer-mentions">
            <div class="contenu">
                Copyright KONG Alexandre © - 2016 — <strong>Mentions légales</strong>
            </div>
        </div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
