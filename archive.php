<?php
/**
 * The template for displaying the archive.
 *
 */
get_header(); ?>
	<div id='reposter_width'>
		<div id='reposter_main' class='wrapper'>
			<?php if( get_header_image() != '' ) { ?>
				<div id='reposter_header-image'>
					<img src='<?php header_image(); ?>' alt='' />
				</div>
			<?php } ?>
			<div id='reposter_title'>
				<div id='reposter_article_head'>
					<p><?php reposter_the_breadcrumb(); ?></p><!--breadcrumbs -->
				</div>
				<div id='reposter_search' class='reposter_widget_search'><?php get_search_form(); ?><!-- form search --></div>
			</div><!--end #reposter_title-->
			<hr/>
			<div id='reposter_main_content'>
				<section id='reposter_left-side'>
					<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
						<div class='reposter_cont reposter-archives'>
							<?php if( have_posts() ) : ?>
								<?php if ( is_tag() ) : ?><!-- filter posts by tags -->
									<h4 class='reposter_cat'><?php printf( __( 'Tag Archives: %s', 'reposter' ), "<span class='reposter_orange'>" . single_tag_title( '', false ) . '</span>' ); ?></h4>
								<?php elseif ( is_author() ) : ?><!--filter posts by author-->
									<h4 class='reposter_cat'><?php printf( __( 'Author Archives: %s', 'reposter' ), "<span class='reposter_orange'>" . get_the_author_meta( 'user_nicename', $user_ID ) . '</span>' ); ?></h4>
								<?php elseif ( is_category() ) : ?><!-- filter posts by categories -->
									<h4 class='reposter_cat'><?php printf( __( 'Category Archives: %s', 'reposter' ), "<span class='reposter_orange'>" . single_cat_title( '', false ) . '</span>' ); ?></h4>
								<?php elseif ( is_day() ) : ?><!-- filter posts by archives -->
									<h4 class='reposter_cat'><?php printf( __( 'Daily Archives: <span>%s</span>', 'reposter' ), "<span class='reposter_orange'>" . get_the_date() . '</span>' ); ?></h4>
								<?php elseif ( is_month() ) : ?>
									<h4 class='reposter_cat'><?php printf( __( 'Monthly Archives: <span>%s</span>', 'reposter' ), "<span class='reposter_orange'>" . get_the_date( _x( ' F Y', 'monthly archives date format', 'reposter' ) ) . '</span>' ); ?></h4>
								<?php elseif ( is_year() ) : ?>
									<h4 class='reposter_cat'><?php printf( __( 'Yearly Archives: <span>%s</span>', 'reposter' ), "<span class='reposter_orange'>" . get_the_date( _x( 'Y', 'yearly archives date format', 'reposter' ) ) . '</span>' ); ?></h4>
								<?php endif;
							endif; ?>
						</div><!--end .reposter_cont-->
					</article><!--end .post-->
					<!--post while have posts-->
					<?php $i = 0;
					while( have_posts() ) : the_post(); $i++ ?>
						<article class="post<?php if ( false === is_paged() && 1 == $i )
							echo ' reposter_first';
							if( ( $wp_query->current_post + 1 ) == ( $wp_query->post_count ) )
								echo ' reposter_last'; ?>">
							<div class='reposter_cont' >
								<!--url post title-->
								<p class='entry-title'>
									<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
								</p>
								<!-- category and date posted-->
								<div class='entry-meta'>
									<?php _e( 'Posted on', 'reposter' ) ?><span class='reposter_orange'><a href="<?php if ( '' !== get_the_title() ) {
										echo get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ); 
									}
									else {
										the_permalink();
									} ?>">
									<?php the_time( ' j , F Y ' ); ?></a></span><?php _e( 'in', 'reposter' ); ?>
									<span class='reposter_orange'><?php the_category( ', ' ); ?></span><?php _e( ' author: ', 'reposter' ); ?><span class='reposter_orange'><?php the_author_posts_link(); ?></span>
									<?php edit_post_link( __( '| Edit', 'reposter' ) ); ?>
								</div><!-- end .entry-meta -->
								<!-- post image-->
								<?php if ( has_post_thumbnail() ) 
									echo "<div class='featured-image'>" . get_the_post_thumbnail() . "</div><div class='featured-image-title'>" . reposter_featured_img_title() . '</div>';
								the_content();
								comments_template( '', true ); ?>
							</div><!--end .reposter_cont-->
							<!--tags-->
							<?php if ( has_tag() ) { ?>
								<div class='tags'><?php the_tags(); ?></div><!-- styling tags-->
							<?php } 
							else { ?> <!-- else empty block-->
								<div></div>
							<?php } ?>
							<div class='reposter_back-top'>
								<span class='reposter_orange'>
									<a href='javascript:scroll( 0,0 );'><?php _e( '[Top]', 'reposter' ); ?></a>
								</span>
							</div><!--scrolling top -->
						</article><!--end #post-->
					<?php endwhile; ?>
					<nav id='reposter_nav-pages'>
						<div id='pre-page'><?php previous_posts_link(); ?></div>
						<div id='next-page'><?php next_posts_link(); ?></div>
					</nav><!--end #reposter_nav-pages-->
				</section><!--end #reposter_left-side-->
			<?php get_sidebar(); ?>
			</div><!--end #reposter_main_content-->
			<div class='reposter_clear'></div>
		</div><!--end #reposter_main-->
	</div><!--end #reposter_width-->
<?php get_footer(); ?>
<!--<?php post_class(); ?>-->