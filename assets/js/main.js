(function ($) {
	'use strict';
	//menu options custom affix
	var fixed_top = $('.header-section');
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			fixed_top.addClass('animated fadeInDown menu-fixed');
		} else {
			fixed_top.removeClass('animated fadeInDown menu-fixed');
		}
	});

	$(window).on('load', function () {
		//preloader
		$('.preloader')
			.delay(300)
			.animate(
				{
					opacity: '0',
				},
				500,
				function () {
					$('.preloader').css('display', 'none');
				}
			);

		// run test on initial page load
		checkSize();
		// run test on resize of the window
		// $(window).resize(checkSize);

		//menu options custom affix
		var fixed_top = $('.header-section');
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 50) {
				fixed_top.addClass('header-close');
			} else {
				fixed_top.removeClass('header-close');
			}
		});
	});

	//Function to the css rule
	function checkSize() {
		if (window.matchMedia('(max-width: 1199px)').matches) {
			$('.navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a').on(
				'click',
				function () {
					var element = $(this).parent('li');
					if (element.hasClass('open')) {
						element.removeClass('open');
						element.find('li').removeClass('open');
						element.find('ul').slideUp(500, 'linear');
					} else {
						element.addClass('open');
						element.children('ul').slideDown();
						element.siblings('li').children('ul').slideUp();
						element.siblings('li').removeClass('open');
						element.siblings('li').find('li').removeClass('open');
						element.siblings('li').find('ul').slideUp();
					}
				}
			);
		}
	}

	$('.offer-slider').owlCarousel({
		loop: true,
		margin: 0,
		responsiveClass: true,
		dots: false,
		center: true,
		items: 4,
		navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>",
		],
		responsive: {
			0: {
				items: 1,
				nav: true,
			},
			768: {
				items: 2,
				nav: false,
				center: false,
			},
			992: {
				items: 3,
				nav: true,
				center: false,
			},
			1200: {
				items: 4,
				nav: true,
				center: false,
			},
		},
	});

	$('.investor-slider').owlCarousel({
		loop: true,
		margin: 0,
		responsiveClass: true,
		dots: false,
		navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>",
		],
		responsive: {
			0: {
				items: 1,
				nav: true,
			},
			768: {
				items: 2,
				nav: false,
			},
			992: {
				items: 3,
				nav: true,
				loop: false,
			},
		},
	});

	//js code for mobile menu
	$('.menu-toggle').on('click', function () {
		$(this).toggleClass('is-active');
	});

	$('.faq-header').on('click', function (e) {
		e.preventDefault();

		var $this = $(this);

		if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.next().slideUp(350);
			$this.removeClass('open');
		} else {
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
			$this.addClass('open');
		}
	});

	// Show or hide the sticky footer button
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 200) {
			$('.scroll-to-top').fadeIn(200);
		} else {
			$('.scroll-to-top').fadeOut(200);
		}
	});
	// Animate the scroll to top
	$('.scroll-to-top').on('click', function (event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 800);
	});
})(jQuery);

var swiperCover = new Swiper('.swiper-cover', {
	slidesPerView: 1,
	spaceBetween: 0,
	centeredSlides: true,
	loop: true,
	// autoplay: {
	// 	delay: 2500,
	// 	disableOnInteraction: false,
	// },
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});