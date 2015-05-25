( function($){
	wp.customize( 'destin_theme_options[extended_footer_columns]', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widget' ).removeClass( 'col-md-2 col-md-3 col-md-4 col-md-6 col-md-12' ).addClass( to );
		} );
	} );
} )(jQuery);