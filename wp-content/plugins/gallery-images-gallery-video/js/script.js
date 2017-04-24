/*
*      wpTools GIGV
*      Version: 1.0.0
*      By wpTools
*      Contact: http://wptools.co/
*      Licensed under the GPLv3 license - https://opensource.org/licenses/gpl-3.0.html
*      Copyright (c) 2016, wpTools. All rights reserved.
*/


(function($) {

 	$('.wptools_gigr_block').each(function(index, el) {
 		var options = {};
 		if( $(this).data('hidecaption')==1 ) options.hideCaption = 1;
 		var id = $( this).attr('id');
 		$('#'+id+' a').swipebox(options);	
 	});
}(jQuery));
