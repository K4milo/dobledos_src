 	var $scopes = {

 		init: function() {

 			this.menuScripts();
 			this.homeSlider();
 			this.homeCarousel();
 			this.scrollScripts();
 			this.contactScripts();
 			this.productScripts();
 			this.testimonialScripts();
 		},

 		// scripts for Menu

 		menuScripts: function() {
 			this.$search = $('.search-btn');
 			this.$search.on('click', this.menu_toggledSearch);

 			// Append new links to menu
 			this.$menuWrapper = $('.sub-menu.js-sub-menu > ul');
 			this.$menuWrapper.append('<li><a href="/pagina/12-ventas-corporativas" class="dropdown-submenu">Ventas Corporativas</a></li>');
 			$('.featured-products h2.products-section-title.text-uppercase').html('Productos Destacados');
        $('a.category:first').attr('href', 'https://dobledos.com/2-camisas');
 			// Mobile logic
 			let $button = $('button.mobile-button');
 			let $menuWrapper = $('.main-navigation .navigation');
 			let $menuWrapperInner = $menuWrapper.find('.menu.js-top-menu');

 			if($(window).width() < 768) {
 				$button.on('click', function(event) {
 					event.preventDefault();

 					$button.toggleClass('active-menu');
 					$menuWrapper.toggle();
 					$menuWrapperInner.toggleClass('hidden-sm-down');
 				});
 			}
 		},

 		menu_toggledSearch: function(event) {
 			this.$searchToggle = $('.main-search');
			this.$searchToggle.slideToggle('slow');
		},

		scrollScripts: function() {
			$(window).scroll(function() {

				let scroll    = $(window).scrollTop();
				let header_el = $('.main-navigation');

				if (scroll >= 100) {
					header_el.addClass("scroll_fixed");
				} else {
					header_el.removeClass("scroll_fixed");
				}
			});
		},

		// Scripts for Slider

		homeSlider: function(){
			this.$sliderWrapper = $('.carousel-inner');
			this.$sliderItems = this.$sliderWrapper.find('.carousel-item');
			/*
			if($(window).width() > 768) {
				this.$sliderItems.each(function(index, el) {
					var instance  = $(this),
						image     = instance.find('figure img'),
						image_src = image.attr('src');

					instance.css('background-image','url('+ image_src +')');

				});
			}*/
		},

		homeCarousel: function() {
			this.$carouselWrapper = $('.featured-products .products');

			if(this.$carouselWrapper.length > 0) {
				// slider
				let $slick_slider = this.$carouselWrapper;
				let settings_slider = {
					dots: true,
					arrows: false
				}

				slick_on_mobile( $slick_slider, settings_slider);

				// slick on mobile
				function slick_on_mobile(slider, settings){
					$(window).on('load resize', function() {
						if ($(window).width() > 767) {
							if (slider.hasClass('slick-initialized')) {
								slider.slick('unslick');
							}
							return
						}
						if (!slider.hasClass('slick-initialized')) {
							return slider.slick(settings);
						}
					});
				};
			}

		},

		contactScripts: function() {
			if($('body').hasClass('page-contact') || $('body').hasClass('cms-id-7')) {
				let formWrapper = $('section.page-content form');

				if(formWrapper.length > 0) {
					formWrapper.find('h3').text('Contáctenos');
				}
			}
		},

		// Product scripts
		productScripts: function(){
			let productCares = $('ul.data-cares li');

			if(productCares.length > 0){
				productCares.each(function(index, el) {
					let $instanceCare = $(this);
					let $instanceContent = $instanceCare.text();

					$instanceCare.addClass($instanceContent.toLowerCase());

				});
			}
		},

		testimonialScripts: function(){
			let $carouselWrapper = $('.testimonials__wrapper');
			let settings_slider = {
				dots: false,
				arrows: true
			}


			if($carouselWrapper.length > 0) {
				if (!$carouselWrapper.hasClass('slick-initialized')) {
					console.log('$carouselWrapper',$carouselWrapper)
					$carouselWrapper.slick(settings_slider);
				}
			}
		},
 	}

 	// Trigger functions
 	$scopes.init();
