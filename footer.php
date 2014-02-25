<?php
/**
 * The template for displaying the footer.
 *
 */
?>
	<div class='reposter_whitespace'>
		<div id='reposter_footer'>
			<div>
				<h1 class='reposter_site-footer'><?php echo get_bloginfo( 'name' ); ?></h1>
			</div>
			<div id='reposter_footer_end' class='reposter_foot'>
				<div>
					<p>
						<?php _e( ' ', 'reposter' ); ?>
						<span class='reposter_grey_serif'><?php _e( 'Copyright', 'reposter' ); ?> &copy; <?php the_date( 'Y' ); ?></span>
						<span class='reposter_orange'>
							<a href="<?php echo esc_url( 'http://bestwebsoft.com/theme/reposter/' ); ?>"> <?php _e( 'Reposter theme', 'reposter' ); ?></a>
						</span>
					</p><!--end p-->
				</div>
			</div><!--end #reposter_footer_end-->
		</div><!--end #reposter_footer-->
	</div><!--end .reposter_whitespace-->
<?php wp_footer(); ?>
</body>
</html>