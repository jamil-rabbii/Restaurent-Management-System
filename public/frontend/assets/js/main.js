(function($){ "use strict";

	jQuery(document).ready(function($) {

		/***
		========================
		  active menu
		========================
		***/

		$(document).on('click','.main-menu li a', function (e) {
            e.preventDefault();
            var anchor = $(this).attr('href');
            var top = $(anchor).offset().top;
            $('html, body').animate({
                scrollTop: $(anchor).offset().top
            }, 1000);
            $(this).parent().addClass('active').siblings().removeClass('active');
        });

        /***
		========================
		  sticky header js
		========================
		***/
		$(window).on('scroll', function () {
				if ($(window).scrollTop() > 200) {
					$('.header-area').addClass('navbar-fixed');
				} else {
					$('.header-area').removeClass('navbar-fixed');
				}
			});


		/* 
		=================================================================
		04 - Food Menu Slider JS
		=================================================================	
		*/

		$(".food-menu-slider").owlCarousel({
			nav: false,
			dots: true,
			autoplay: true,
			margin: 20,
			loop: true,
			mouseDrag: true,
			touchDrag: true,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 1
				},
				600: {
					items: 1
				},
                680: {
					items: 2
				},
				1000: {
					items: 2
				},
				1200: {
					items: 1
				}
			}
		});

		/* 
		=================================================================
		05 - Food Menu Turn JS
		=================================================================	
		*/
		$('.pages').turn({
			duration: 1500,
			width: 638,
			height: 455,
			//  acceleration: true,
			//  display: 'single',
			// autoCenter: true,
			turnCorners: "bl,br",
			elevation: 300,
			when: {
				turned: function (e, page) {
					console.log('Current view: ', $(this).turn('view'));
				}
			}
		});


	});


}(jQuery));
