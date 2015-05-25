<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           comments.php
* @package        Social Magazine
* @author         ThemesMatic
* @copyright      2015 ThemesMatic
*
*/

if ( post_password_required() )
	return; ?>
	
    <div class="social-magazine-comments">
    <?php if ( have_comments()  ) : ?>
        <h3 id="comments"><?php comments_number(__('Write a Comment','social_magazine'), __('One Comment','social_magazine'), '%' . __(' Comments','social_magazine') ); ?></h3>
            <ul class="commentlist">
	            <?php comment_id_fields();
		             wp_list_comments( array( 'callback' => 'social_magazine_comment', 'style' => 'ul' ) ); ?>
            </ul><!-- /comment-list -->
            <?php endif; // have_comments() ?>
            
            <?php if ( comments_open() ) : ?>
           
	            <?php comment_form(); ?>
	        
            <?php endif; // comments_open() ?>
            
            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // comment navigation ?>
				<nav id="comments-nav" class="navigation" role="navigation">
					<div class="alignleft">
						<?php previous_comments_link( __( '&larr; Old Comments', 'social_magazine' ) ); ?>
					</div>
					<div class="alignright">
						<?php next_comments_link( __( 'New Comments &rarr;', 'social_magazine' ) ); ?>
					</div>
				</nav>
			<?php endif; // check for comment navigation ?>
            
    <?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p><?php _e( 'Comments are now closed.' , 'social_magazine' ); ?></p>
		<?php endif; // comments_open() && get_comments_number() ?>
	
</div><!-- /social-magazine-comments -->