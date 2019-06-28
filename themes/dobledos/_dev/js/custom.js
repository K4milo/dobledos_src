 	var $scopes = {

 		init: function() {

 			this.menuScripts();
 			this.homeSlider();
 			this.scrollScripts();
 			this.contactScripts();
 		},

 		// scripts for Menu

 		menuScripts: function() {
 			this.$search = $('.search-btn');
 			this.$search.on('click', this.menu_toggledSearch);

 			// Apopend new links to menu
 			this.$menuWrapper = $('.sub-menu.js-sub-menu > ul');
 			this.$menuWrapper.append('<li><a href="/pagina/12-ventas-corporativas" class="dropdown-submenu">Ventas Corporativas</a></li>');
 			$('.featured-products h2.products-section-title.text-uppercase').html('Productos Destacados');

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

			this.$sliderItems.each(function(index, el) {
				var instance  = $(this),
					image     = instance.find('figure img'),
					image_src = image.attr('src');

				instance.css('background-image','url('+ image_src +')');

			});
		},

		contactScripts: function() {
			if($('body').hasClass('page-contact')) {	
				let formWrapper = $('section.page-content');

				if(formWrapper.length > 0) {
					formWrapper.find('h3').text('Contáctenos');
				}
			}			
		},
 	}
 	
 	// Trigger functions
 	$scopes.init();