		jQuery( function() {
			$( ".is-hamburger" ).click(function () {
				$( "#nav_menu-2" ).toggleClass( "is-open",true );
				$( "body" ).toggleClass( "overflowhidden",true );
				$( ".my-parts" ).toggleClass( "is-closed",true );
			});

			$( ".my-parts" ).click(function (){
				$( "#nav_menu-2" ).toggleClass( "is-open",false );
				$( "body" ).toggleClass( "overflowhidden",false );
				$( ".my-parts" ).toggleClass( "is-closed",false );
			});
		})

