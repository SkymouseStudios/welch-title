(function( $ ){

	"use strict";
	
	var handheldBreakpoint = 980;	//media query breakpoint at which the mobile menu is shown

	// seamless internal links scroll
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, function () {
	        window.location.hash = target;
	    });
	});

	//  dropdownmenu, megamenu
	jQuery('.children, .sub-menu').hide();
	jQuery('#header nav #menu > ul li:has(ul)').on('mouseenter', function() {
		if ( jQuery(window).width() > handheldBreakpoint ) {
			var $this = jQuery(this);
			$this.addClass('active-parent');
			$this.find('> .children, > .sub-menu').stop(true).delay(150).slideDown(200);	
		}
	}).on('mouseleave', function() {
		if ( jQuery(window).width() > handheldBreakpoint ) {
			var $this = jQuery(this);
			$this.find('> .children, > .sub-menu').stop(true).delay(150).slideUp(150, function() {	
				$this.removeClass('active-parent');
			});	
		}
	});

	// init Magnific popup
	jQuery('a.popup').magnificPopup({
	  type: 'image',
	  gallery:{enabled:true},
	  titleSrc: 'alt',
	  cursor: 'mfp-zoom-out-cur'
	});
	
	// remove title on img hover
	var imgTitle;
	jQuery("img, a").on('hover', function(){
		imgTitle = jQuery(this).attr("title");
		jQuery(this).removeAttr("title");
	}, function(){
	   jQuery(this).attr("title", imgTitle);
	});
});

// header menu burger
	jQuery('nav #menu-burger').on('click', function() {
		jQuery('#menu').toggleClass('menu-shown');
	});
