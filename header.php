<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
		<script>
			document.createElement('header');
			document.createElement('nav');
			document.createElement('section');
			document.createElement('article');
			document.createElement('aside');
		</script>
	<![endif]-->
	<!--[if IE 7]>
		<html class='ie ie7' <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
		<html class='ie ie8' <?php language_attributes(); ?>>
	<![endif]-->
	<?php 
	/**
	 * The template for displaying the header.
	 *
	 */
	 ?>
	<title><?php wp_title( '|','true','right' ); ?></title>
	<meta http-equiv='content-type' content='text/html; charset=<?php bloginfo( "charset" ); ?>' />
	<link rel='pingback' href='<?php bloginfo( "pingback_url" ); ?>' />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id='reposter_wrapper-content'>
		<div class='reposter_white'>
			<div id='reposter_header-container'>
				<div id='reposter_header' class='reposter-site-header'>
					<div id='reposter_hgroup'>
						<div>
						<?php reposter_display_header_text(); ?>
							<h1 class='reposter_site-title'>
								<a href='<?php echo home_url(); ?>'><font color='<?php header_textcolor(); ?>'><?php reposter_title_color_letters(); ?></font></a>
							</h1><!-- end .site-title -->
						</div><!-- home page -->
						<div>
							<h2 class='reposter_site-description'><?php reposter_description_color(); ?></h2>
						</div>
					</div><!--end #reposter_hgroup-->
					<?php wp_nav_menu( array( 'theme_location'=>'main' ) ); ?>
				</div><!--end #reposter_header-->
			</div><!--end #reposter_header_container-->
			<div class='reposter_clear'></div>
		</div><!--end .white-->