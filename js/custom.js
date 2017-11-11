jQuery( window ).ready( function( $ )
{
    // Custom scripts for Big City Contracting 11-11-17 JH

    // Variables
    $contactLinks = $( '.contact-links' ),
    $clWidth = $contactLinks.outerWidth(),
    $tct = $( '#top-contact-toggle' ),
    $tctWidth = $tct.outerWidth(),
    $clToggled = $clWidth - $tctWidth - 3,
    $topSocial = $( '.top-social' ),
    $tsWidth = $topSocial.outerWidth(),
    $tst = $( '#top-social-toggle' ),
    $tstWidth = $tst.width(),
    $tsToggled = $tsWidth - $tstWidth - 3,
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
});