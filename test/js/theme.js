/*
Template:  		Quickai HTML5 Template
Written by: 	Harnish Design - (http://www.harnishdesign.net)
*/

(function ($) {
	"use strict";

// Preloader
$(window).on('load', function () {
	$('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(333).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(333);
});

/*---------------------------------------------------
    Primary Menu
----------------------------------------------------- */

// Dropdown show on hover
$('.primary-menu ul.navbar-nav li.dropdown').on("mouseover", function() {
	if ($(window).width() > 991) {
		$(this).find('> .dropdown-menu').stop().slideDown('fast');
		$(this).bind('mouseleave', function() {
		$(this).find('> .dropdown-menu').stop().css('display', 'none'); 
		});
	}
});

// When dropdown going off to the out of the screen.
	$('.primary-menu .dropdown-menu').each(function() {
		var menu = $('#header .header-row').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#header .header-row').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 5) + 'px');
		}
	});
$(function () {
    $(".dropdown li").on('mouseenter mouseleave', function (e) {
		if ($(window).width() > 991) {
            var elm = $('.dropdown-menu', this);
            var off = elm.offset();
            var l = off.left;
            var w = elm.width();
            var docW = $(window).width();

            var isEntirelyVisible = (l + w <= docW);
            if (!isEntirelyVisible) {
                $(elm).addClass('dropdown-menu-right');
            } else {
                $(elm).removeClass('dropdown-menu-right');
            }
			}
    });
});

// Mobile Collapse Nav
$('.primary-menu .dropdown-toggle[href="#"], .primary-menu .dropdown-toggle[href!="#"] .arrow').on('click', function(e) {
	if ($(window).width() < 991) {
        e.preventDefault();
        var $parentli = $(this).closest('li');
        $parentli.siblings('li').find('.dropdown-menu:visible').slideUp();
        $parentli.find('> .dropdown-menu').stop().slideToggle();
        $parentli.siblings('li').find('a .arrow.open').toggleClass('open');
		$parentli.find('> a .arrow').toggleClass('open');
	}
});

// DropDown Arrow
$('.primary-menu').find('a.dropdown-toggle').append($('<i />').addClass('arrow'));
	
// Mobile Menu Button Icon
$('.navbar-toggler').on('click', function() {
		$(this).toggleClass('open');
	});
	

/*--------------------------------------
    Booking (Flights, Train, Bus, Hotels, )
---------------------------------------- */

/* Flights Travellers and Class */
$('#flightTravellersClass').on('click', function() {
        $('.travellers-dropdown').slideToggle('fast');
		/* Change value of Travellers and Class */
		$('.qty-spinner, .flight-class').on('change', function() {
        var ids = ['flightAdult', 'flightChildren', 'flightInfants'];
		var totalCount = ids.reduce(function (prev, id) {
			return parseInt($('#' + id + '-travellers').val()) + prev}, 0);
        var fc = $('input[name="flight-class"]:checked  + label').text();
        $('#flightTravellersClass').val(totalCount + ' - ' + fc);
    }).trigger('change');
    });
	
	/* Trains Travellers and Class */
	$('#trainTravellersClass').on('click', function() {
        $('.travellers-dropdown').slideToggle('fast');
		/* Change value of Travellers and Class */
		$('.qty-spinner, #train-class').on('change', function() {
        var ids = ['trainAdult', 'trainChildren', 'trainInfants'];
		var totalCount = ids.reduce(function (prev, id) {
			return parseInt($('#' + id + '-travellers').val()) + prev}, 0);
		var fc = $('#train-class option:selected').text();
		
        $('#trainTravellersClass').val(totalCount + ' - ' + fc);
    }).trigger('change');
    });
	
	/* Bus Seats */
	$('#busTravellersClass').on('click', function() {
        $('.travellers-dropdown').slideToggle('fast');
		/* Change value of Seats */
		$('.qty-spinner').on('change', function() {
        var ids = ['adult'];
		var totalCount = ids.reduce(function (prev, id) {
			return parseInt($('#' + id + '-travellers').val()) + prev}, 0);
		
        $('#busTravellersClass').val(totalCount + '  ' + 'Seats');
    }).trigger('change');
    });
	
	/* Hotels People / Rooms */
	$('#hotelsTravellersClass').on('click', function() {
        $('.travellers-dropdown').slideToggle('fast');
		/* Change value of People */
		$('.qty-spinner').on('change', function() {
        var ids = ['adult', 'children'];
		var totalCount = ids.reduce(function (prev, id) {
			return parseInt($('#' + id + '-travellers').val()) + prev}, 0)+ ' ' +'People';
			
		var idsRoom = ['hotels-rooms'];
		var totalCountRoom = idsRoom.reduce(function (prev, id) {
			return parseInt($('#hotels-rooms').val()) + prev}, 0)+ ' ' +'Room';
		
        $('#hotelsTravellersClass').val(totalCountRoom + ' / ' + totalCount);
    }).trigger('change');
    });
	
	/* Hide dropdown when clicking outside */
	$(document).on('click', function(event) {
    if (!$(event.target).closest(".travellers-class").length) {
        $(".travellers-dropdown").hide();
    }
	
	/* Hide dropdown when clicking on Done Button */
	$('.submit-done').on('click', function() {
        $('.travellers-dropdown').fadeOut(function() {
            $(this).hide();
        });
    });
});
	
/*----------------------------
    Slideshow (Owl Carousel)
------------------------------ */
$('.slideshow').owlCarousel({
	items:1,
	autoplay:true,
	autoplayTimeout:4500,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
    lazyLoad:true,
    loop:true,
	nav:true,
	navText:['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
});
$('.hero-bg-slideshow').owlCarousel({
	items:1,
	autoplay:true,
	autoplayTimeout:4500,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
    lazyLoad:true,
    loop:true,
	dots:false,
});
/*---------------------------------------------------
   Carousel (Owl Carousel)
----------------------------------------------------- */
$('.brands').owlCarousel({
	margin:10,
	autoplay:true,
	autoplayTimeout:4500,
	lazyLoad:true,
	//nav:true,
	//navText:['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	responsive:{
        0:{items:2,},
        576:{items:3,},
		768:{items:4,},
        992:{items:6,}
    }
});

$('.owl-carousel.banner').owlCarousel({
	margin:30,
	autoplay:true,
	autoplayTimeout:4500,
	lazyLoad:true,
	nav:true,
	navText:['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	responsive:{
        0:{items:1,},
        576:{items:2,},
		768:{items:2,},
        992:{items:3,}
    }
});

/*---------------------------------------------------
   tooltips
----------------------------------------------------- */
$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

/*---------------------------------------------------
   Scroll to top
----------------------------------------------------- */
$(function () {
		$(window).on('scroll', function(){
			if ($(this).scrollTop() > 150) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		});
$('#back-to-top').on("click", function() {
	$('html, body').animate({scrollTop:0}, 'slow');
	return false;
});


$('.smooth-scroll a').on("click", function() {
    var sectionTo = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(sectionTo).offset().top - 50}, 600);
});

})(jQuery);