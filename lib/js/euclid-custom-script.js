"use strict";
var $ = jQuery.noConflict();

$(document).ready( function() {
	child_hover();
});

function child_hover() {
	var child = $( '.sub-page > li' );
	var gchild = '.sub-sub-page' ;

	child.hover( function() {
		var index = $(this).index();
		index += 1;
		$( gchild + ':not(:nth-child(' + index + '))' ).hide();
		$( gchild ).eq( index - 1 ).show();
	});
}