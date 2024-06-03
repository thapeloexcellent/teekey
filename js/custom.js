jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 50) {
		jQuery('.scrolltop:hidden').stop(true, true).fadeIn();
	} else {
		jQuery('.scrolltop').stop(true, true).fadeOut();
	}
});

jQuery(function () {
	jQuery(".scroll").click(function () {
		jQuery("html,body").animate({
			scrollTop: jQuery(".thetop").offset().top
		}, "1000");
		return false
	})
})
jQuery(document).ready(function () {
	'use strict';

	var hyperlink = '',
		current = '';

	jQuery('#experiencecara').owlCarousel({
		loop: true,
		autoplay: true,
		dots: false,
		responsive: {
			0: {
				items: 1
			}
		},
		autoplayHoverPause: false,
		autoplayTimeout: 9000
	});

	jQuery('#headercara').owlCarousel({
		animateIn: 'animate__fadeIn',
		animateOut: 'animate__fadeOut',
		loop: true,
		responsiveClass: true,
		dots: false,
		nav: false,
		responsive: {
			0: {
				items: 1
			}
		},
		autoplay: true,
		autoplayHoverPause: false,
		autoplayTimeout: 8000
	});
	var owl = jQuery('#headercara');
	owl.on('changed.owl.carousel', function (event) {
		var item = event.item.index - 2; // Position of the current item
		jQuery('.middleTxt').removeClass('animate__animated animate__fadeIn');
		jQuery('.topTxt').removeClass('animate__animated animate__fadeIn');
		jQuery('.lpic').removeClass('zoomin');

		jQuery('.owl-item').not('.cloned').eq(item).find('.middleTxt').addClass('animate__animated animate__fadeIn');
		jQuery('.owl-item').not('.cloned').eq(item).find('.topTxt').addClass('animate__animated animate__fadeIn');
		jQuery('.owl-item').not('.cloned').eq(item).find('.lpic').addClass('zoomin');
	});

	jQuery(window).on('scroll', function () {
		if (jQuery(window).scrollTop() > 10) {
			jQuery('.navbar').addClass('actvnavbar');
		} else {
			jQuery('.navbar').removeClass('actvnavbar');
		}
	});

	jQuery("#testimonial-slider").owlCarousel({
		items: 1,
		itemsDesktop: [1000, 2],
		itemsDesktopSmall: [979, 1],
		itemsTablet: [768, 1],
		pagination: true,
		navigation: true,
		slideSpeed: 1000,
		singleItem: true,
		transitionStyle: "goDown",
		navigationText: ["", ""],
		autoPlay: false
	});

	var fullHeight = function () {

		jQuery('.js-fullheight').css('height', jQuery(window).height());
		jQuery(window).resize(function () {
			jQuery('.js-fullheight').css('height', jQuery(window).height());
		});

	};
	fullHeight();

	jQuery('#sidebarCollapse').on('click', function () {
		jQuery('#sidebar').toggleClass('active');
	});

	jQuery(".experCara").owlCarousel({
		animateOut: 'animate__animated animate__fadeOut',
		animateIn: 'animate__animated animate__fadeIn',
		loop: true,
		margin: 10,
		responsiveClass: true,
		dots: false,
		nav: false,
		responsive: {
			0: {
				items: 1
			}
		},
		autoplay: true,
		autoplayHoverPause: false,
		interval: 5000
	});

	!function (c, h, i, m, p) {
		m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
	}(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/b914ea1401d69d8d341b9a72a/9ff2c33512c7db9a427665ac1.js");
	// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
			document.getElementById("navbar").style.padding = "10px 10px";
			jQuery("#navbar").addClass('actvnavbar navbar-light bg-light');
			document.getElementById("logo").style.width = "180px";
		}
		else {
			document.getElementById("navbar").style.padding = "15px 10px";
			document.getElementById("logo").style.width = "150px";
			jQuery("#navbar").removeClass('actvnavbar navbar-light bg-light');
		}
	}
});