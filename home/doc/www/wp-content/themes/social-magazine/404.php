<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           404.php
* @package        Social Magazine
* @author         ThemesMatic
* @copyright      2015 ThemesMatic
*/
get_header(); ?>

<div class="wrap">
	<div class="container">
		<div class="col-md-8 blog">
			<div class="blog-block">
				<div class="error">
				<?php _e('<h1>404</h1>', 'social_magazine'); ?>
					<?php _e('<h2 class="sub-error">That page hasnt been created yet.</h2>', 'social_magazine'); ?>
					<?php _e('<p>It appears that page doesnt exist. Try some of these latest posts or a search.</p>', 'social_magazine'); ?>
					<?php _e('<h3>Recent Posts</h3>', 'social_magazine'); ?>
						<ul>
						<?php
							$args = array( 'numberposts' => '10' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </li> ';
							}
						?>
						</ul>
				</div><!-- /error -->
			</div><!-- /blog-block -->
		</div><!-- /col-md-8 blog -->
		<?php get_sidebar(); ?>
	</div><!-- /container -->
<?php get_footer(); ?>