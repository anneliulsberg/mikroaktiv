jQuery(function($) {    
    "use strict";
    
    if (document.documentElement.clientWidth > 615) {
        $('#pager').append('<ol>');

        $('#slideshow').cycle({
            pager : '#pager ol',
            activePagerClass : 'current',
            pagerAnchorBuilder: function(idx, slide) { 
                return '<li><a href="#"></a></li>'; 
            } 
        });
    }    
});