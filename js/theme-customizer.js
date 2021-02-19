(function( $ ) {
	"use strict";

	var sFont;

	// Mostrar y esconder título del sitio
		wp.customize( 'mostrar_titulo', function( value ) {
			value.bind( function( to ) {
				true === to ? $( '.logo .title-head' ).hide() : $( '.logo .title-head' ).show();
			} );
		});

	// Mostrar y ocultar link Tips del Encabezado
		wp.customize( 'ocultar_tips', function( value ) {
			value.bind( function( to ) {
				true === to ? $( '.menu-two .tips' ).show() : $( '.menu-two .tips' ).hide();
			} );
		});

		// Mostrar y ocultar link Boletín del Encabezado
			wp.customize( 'ocultar_boletines', function( value ) {
				value.bind( function( to ) {
					true === to ? $( '.menu-two .newsletter' ).show() : $( '.menu-two .newsletter' ).hide();
				} );
			});

			// Mostrar y ocultar redes
				wp.customize( 'facebook_no', function( value ) {
					value.bind( function( to ) {
						true === to ? $( '.facebook_lib' ).show() : $( '.facebook_lib' ).hide();
					} );
				});
				wp.customize( 'instagram_no', function( value ) {
					value.bind( function( to ) {
						true === to ? $( '.instagram_lib' ).show() : $( '.instagram_lib' ).hide();
					} );
				});
				wp.customize( 'twitter_no', function( value ) {
					value.bind( function( to ) {
						true === to ? $( '.twitter_lib' ).show() : $( '.twitter_lib' ).hide();
					} );
				});
				wp.customize( 'youtube_no', function( value ) {
					value.bind( function( to ) {
						true === to ? $( '.youtube_lib' ).show() : $( '.youtube_lib' ).hide();
					} );
				});
				wp.customize( 'linkedin_no', function( value ) {
					value.bind( function( to ) {
						true === to ? $( '.linkedin_lib' ).show() : $( '.linkedin_lib' ).hide();
					} );
				});

})( jQuery );
