<?php
	
	new social_magazine_customizer();

class social_magazine_customizer
{
    public function __construct()
    {
        add_action( 'customize_register', array(&$this, 'social_manager' ));
    }
    
    /**
     * Social Manager
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function social_manager( $wp_manager )
    {
        $this->social_section( $wp_manager );
    }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    */
   public static function header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
           <?php self::generate_css('.site-title', 'color', 'header_textcolor', '#'); ?>
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
    /**
     * This will generate a line of CSS for header output.
     */
    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }

    public function social_section( $wp_manager )
    {
        $wp_manager->add_section( 'customizer_social_section', array(
            'title'          => 'Social Magazine Options',
            'priority'       => 35,
        ) );
        $wp_manager->add_section( 'customizer_social_icons_section', array(
            'title'          => 'Social Icons',
            'priority'       => 35,
        ) );
        
        //*********************************************************************************
        //Adds custom intro content

        // Main Paragraph
        $wp_manager->add_setting( 'main_paragraph_setting', array(
            'default'        => 'Add an intro paragraph or delete this',
            'sanitize_callback' => 'social_sanitize_text',
        ) );
        
        $wp_manager->add_control( 'main_paragraph_setting', array(
            'label'   => 'Main Paragraph',
            'section' => 'customizer_social_section',
            'type'    => 'text',
            'priority' => 1
        ) );

         // Second Paragraph
        $wp_manager->add_setting( 'second_paragraph_setting', array(
            'default'        => 'Add a second paragraph or delete this',
            'sanitize_callback' => 'social_sanitize_text',
        ) );
        
        $wp_manager->add_control( 'second_paragraph_setting', array(
            'label'   => 'Second Paragraph',
            'section' => 'customizer_social_section',
            'type'    => 'text',
            'priority' => 1
        ) );

         // Button URL
        $wp_manager->add_setting( 'button_url_setting', array(
            'default'        => 'url of button',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'button_url_setting', array(
            'label'   => 'Button Url (http://)',
            'section' => 'customizer_social_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        
         // Button Text
        $wp_manager->add_setting( 'button_text_setting', array(
            'default'        => 'button text',
            'sanitize_callback' => 'social_sanitize_text',
        ) );
        
        $wp_manager->add_control( 'button_text_setting', array(
            'label'   => 'Button Text',
            'section' => 'customizer_social_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        
        //******************************************************************************/
        // Adds Social URLs
        
        $wp_manager->add_setting( 'twitter_setting', array(
            'default'        => 'https://www.twitter.com',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'twitter_setting', array(
            'label'   => 'Twitter URL',
            'section' => 'customizer_social_icons_section',
            'type'    => 'text',
            'priority' => 1
        ) );

        $wp_manager->add_setting( 'facebook_setting', array(
            'default'        => 'https://www.facebook.com',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'facebook_setting', array(
            'label'   => 'Facebook URL',
            'section' => 'customizer_social_icons_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        
        $wp_manager->add_setting( 'youtube_setting', array(
            'default'        => 'https://www.youtube.com',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'youtube_setting', array(
            'label'   => 'YouTube URL',
            'section' => 'customizer_social_icons_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        
        $wp_manager->add_setting( 'pinterest_setting', array(
            'default'        => 'https://www.pinterest.com',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'pinterest_setting', array(
            'label'   => 'Pinterest URL',
            'section' => 'customizer_social_icons_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        
        $wp_manager->add_setting( 'linkedin_setting', array(
            'default'        => 'https://www.linkedin.com',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'linkedin_setting', array(
            'label'   => 'linkedin URL',
            'section' => 'customizer_social_icons_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        
        $wp_manager->add_setting( 'rss_setting', array(
            'default'        => 'http://feedburner.google.com/',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_manager->add_control( 'rss_setting', array(
            'label'   => 'RSS Feed URL',
            'section' => 'customizer_social_icons_section',
            'type'    => 'text',
            'priority' => 1
        ) );									
    											
        function social_sanitize_text( $input ) {
			$filtered = wp_check_invalid_utf8( $input );
				 
			if ( strpos($filtered, '<') !== false ) {
				$filtered = wp_pre_kses_less_than( $filtered );
				// This will strip extra whitespace.
				$filtered = wp_strip_all_tags( $filtered, true );
				} else {
				$filtered = trim( preg_replace('/[\r\n\t ]+/', ' ', $filtered) );
				}
				return wp_kses_post( force_balance_tags( $input ) );
				}
    }

}
// Output custom CSS to live site
add_action( 'wp_head' , array( 'social_magazine_customizer' , 'header_output' ) );

?>