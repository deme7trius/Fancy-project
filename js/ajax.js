jQuery(document).ready(function($) {
	/* AJAX Sample */
	$( '#form' ).submit( function( event ) { 
        event.preventDefault(); 
		$.post(
            MyAjax.ajaxurl,
            {
                action : 'load_more_posts',
                value : $('#form').serialize()
            },
                function(data) {
                    $(".results").html(data);
                }
        );
	});
});