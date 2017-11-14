jQuery( window ).ready( function( $ )
{
    // Custom scripts for Big City Contracting 11-11-17 JH

    // Variables
    $contactLinks = $( '.contact-links' ),
    $clWidth = $contactLinks.outerWidth(),
    $tct = $( '#top-contact-toggle' ),
    $tctWidth = $tct.outerWidth(),
    $clToggled = $clWidth - $tctWidth - 7,
    $topSocial = $( '.top-social' ),
    $tsWidth = $topSocial.outerWidth(),
    $tst = $( '#top-social-toggle' ),
    $tstWidth = $tst.width(),
    $tsToggled = $tsWidth - $tstWidth - 9,
    $about = $( '.about' ),
    $winWidth = $( window ).outerWidth();

    if ( $winWidth < 768 )
    {
        // Set contact-links -left on mobile
        $contactLinks.css( 'left', -$clToggled );
        // Set top-social -right on mobile
        $topSocial.css( 'right', -$tsToggled );

        $tct.on( 'click', function()
        {
            if ( $contactLinks.hasClass( 'opened' ) ){
                $contactLinks.removeClass( 'opened' );
                $contactLinks.css( 'left', -$clToggled );
            } else {
                $contactLinks.addClass( 'opened' );
                $contactLinks.css( 'left', 0 );
            }
        });

        $tst.on( 'click', function()
        {
            if ( $topSocial.hasClass( 'opened' ) ){
                $topSocial.removeClass( 'opened' );
                $topSocial.css( 'right', -$tsToggled );
            } else {
                $topSocial.addClass( 'opened' );
                $topSocial.css( 'right', 0 );
            }
        });
    }

    // Set background image position for about section
    if ( $winWidth > 767 ) {
        $bgPosition = $winWidth / 2 + 'px' + ' center';

        $about.css( 'backgroundPosition', $winWidth / 2 + 'px' + ' center' );
    }


    // Smooth Scroll for Back To Top Button *Thank you CSS-TRICKS*
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});
});