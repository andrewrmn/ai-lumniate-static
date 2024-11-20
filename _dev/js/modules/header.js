'use strict';

const $ = require('jquery');

class Header {

	constructor( options ) {

		var el = $('#site-header'),
			w = $(window),
			b = $('body'),
			d = document;

		var lastScrollTop = 0;
		var threshold = 100;

		d.addEventListener("scroll", function () {
			if (w.scrollTop() >= threshold) {
				b.addClass('is-sticky');
			} else {
				b.removeClass('is-sticky');
			}

			var st = window.pageYOffset || document.documentElement.scrollTop;
			if (st > lastScrollTop) {
				if (b.hasClass('scrolling-up')) {
					b.removeClass('scrolling-up')
				}
			} else {
				if (!b.hasClass('scrolling-up')) {
					b.addClass('scrolling-up');
				}
			}
			lastScrollTop = st <= 0 ? 0 : st;
		}, false);

		$(document).ready(function(){
			if ($(document).scrollTop() >= threshold) {
				b.addClass('is-sticky');
			}
		});


		$('.burger').click(function(){
			if ( $('body').hasClass('menu-is-open') ) {
				$('body').removeClass('menu-is-open')
			} else {
				$('body').addClass('menu-is-open')
			}
		});

		$('.site-search-trigger').click(function(){
			if ( $('body').hasClass('search-is-open') ) {
				$('body').removeClass('search-is-open');
			} else {
				$('body').addClass('search-is-open');
				$('.site-search-desktop #s').focus();
			}
		});
		$('.site-search-desktop__screen').click(function(){
			$('body').removeClass('search-is-open');
		});


		$('body').on('keyup', function (e) {
			switch (e.which) {
				case 27:
					$('body').removeClass('search-is-open');
					break;
			}
		});

		$(document).ready(function(){
			var subNavs = $('.nav-buckets__primary > ul > li > ul');
			subNavs.hide();
			$('.main-nav > li.menu-item-has-children > a').click(function(e){
				e.preventDefault();
				var el = $(this);
				var target = $(this).next('.sub-menu');
				if( el.hasClass('is-open') ) {
					el.removeClass('is-open');
					target.slideUp(250);
				} else {
					el.addClass('is-open');
					target.slideDown(350);
				}
			});
		});


		$('.desktop-navigation > ul > li.menu-item-has-children').on('mouseenter', function(){
			$(this).addClass('is-hovering');
			if( !$(this).hasClass('js-mega-menu') ) {
				$(this).find('.js-menu-panel').addClass('is-open');
			}
		});
		$('.desktop-navigation > ul > li.menu-item-has-children').on('mouseout', function(){
			$(this).find('.js-menu-panel').removeClass('is-open');
			$('li.menu-item-has-children.is-hovering').removeClass('is-hovering');
		});

		$('.js-mega-menu > ul > li.menu-item-has-children > a').click(function(e){
			e.preventDefault();
		});

		$('.desktop-navigation > ul > li.menu-item-has-children').on('focus', function(){
			$('#blank-panel').removeClass('is-open');
			$('li.menu-item-has-children.is-hovering').removeClass('is-hovering');
		});


		$('.desktop-navigation > ul > li.menu-item-has-children').on('focusin', function() {
			$(this).addClass('is-focused');
		});

		$('.desktop-navigation > ul > li.menu-item-has-children').on('focusout', function() {
			$(this).removeClass('is-focused');
		});


		if( $('.js-person-slide-out') ) {
			$('.slide-out__screen, .slide-out__top-bar button').click(function(){
				$('.js-person-slide-out').removeClass('is-active');
				$('body').removeClass('slide-out-is-active');
			});

			$('*[data-open-details]').click(function() {
				var target = $(this).attr('data-open-details');
				$('#' + target + '.js-person-slide-out').addClass('is-active');
				$('body').addClass('slide-out-is-active');
			});
		}
	}

}

module.exports = Header;
