﻿(function ($) {
	"use strict";

    /*ScrollR */
	if ($(window).width() > 1024) {
	var s = skrollr.init({
		forceHeight: false
	});
	}

	/*Gallery ColorBox */
	$('.gallery_txt a').colorbox({
		rel:'gal',
		maxWidth:"100%",
	});

	/*Main Menu Button */
	$('.main_menu_btn').on("click", function(e){
		$(this).toggleClass('main_menu_btn_open');
		$('.main_menu_block').toggleClass('main_menu_block_open').fadeToggle();
		$('.main_menu_block').find('.menu_wrapper').toggleClass('active');
		$('header .anim').toggleClass('active');
		e.preventDefault();
	});
	
	/* Section Background */
	$('section, .parallax').each(function(){
		var image = $(this).attr('data-image');
		if (image){
			$(this).css('background-image', 'url('+image+')');	
		}
	});
	
	/*ColorBox*/
	if ($(window).width() >= 760) {
		$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
	}else{
		$(".youtube").colorbox({iframe:true, innerWidth:320, innerHeight:240});
	}
	$(window).resize(function () {
		if ($(window).width() >= 760) {
			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
		}else{
			$(".youtube").colorbox({iframe:true, innerWidth:320, innerHeight:240});
		}
	 });
	
	/*Scroll Effect*/
	$('.intro_down, .go').on("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 1000);
		e.preventDefault();
	});
	
	/*Show/Hide Photo in When&Where Block*/
	$('.photocamera span').on("click", function(e){
		$(this).parents('section').find('.opacity').toggleClass('fade');
		$(this).parents('section').find('.over').fadeToggle();
		e.preventDefault();
	});

	/*Player*/
	$('.music').on("click", function(e){
		$('.player').fadeToggle();
		e.preventDefault();
	});

	
	/*CountDown*/
	$('.married_coundown').countdown({until: new Date(2021, 12, 19)});
	
	/*OWL Carousel in Our Story*/
	$(".story_wrapper").owlCarousel({
 		navigation : true,	responsive: true, responsiveRefreshRate : 200,	slideSpeed : 200,	
 		paginationSpeed : 200,	rewindSpeed : 500,	items:3,  itemsTablet: [768,1], autoPlay : true,
		itemsMobile : [479,1], 	itemsDesktopSmall : [980,1],  itemsDesktop : [1500,2], mouseDrag:false
	});

	/*Gallery Carousel */
	$(".gallery_wrapper").owlCarousel({
 		navigation : true,	responsive: true, responsiveRefreshRate : 200,	slideSpeed : 200,	
 		paginationSpeed : 200,	rewindSpeed : 500,	items:3,  itemsTablet: [768,2], autoPlay : true,
		itemsMobile : [479,1], mouseDrag:false
	});

	/*Registry Carousel */
	$(".registry_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, slideSpeed : 200, paginationSpeed : 200,
		rewindSpeed : 500,	stopOnHover : true, autoHeight : true, items:3, mouseDrag:false, autoPlay : true
	});

	/*The Crew Carousel*/
	$(".guest_wrapper").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, slideSpeed : 200,	paginationSpeed : 200,
		rewindSpeed : 500, stopOnHover : true, autoHeight : true, items:4, mouseDrag:false, autoPlay : true
	});	

	/*Slider Carousel*/
	$(".slider").owlCarousel({
 		navigation : true, responsive: true, responsiveRefreshRate : 200, slideSpeed : 200,	paginationSpeed : 200,
		rewindSpeed : 500, stopOnHover : false, autoHeight : true, singleItem:true, mouseDrag:false, autoPlay : true, transitionStyle : "fade"
	});	

	/* Top Menu Click to Section */
	$('.sub_menu').find('a').on("click", function(e){
		$('.sub_menu').find('a').removeClass('active');
		$(this).addClass('active');
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top +1
		}, 1000);
		$(".main_menu_btn").trigger('click');
		e.preventDefault();
	});
	
	
	/*FireFly in Intro*/
	$.firefly({
		color: '#fff', minPixel: 1, maxPixel: 3, total : 55, on: '.into_firefly'
	});
	
	/* Refresh ScrollR */
	s.refresh($(".guest_wrapper, .our_story"));

})(jQuery);