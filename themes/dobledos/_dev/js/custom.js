 	var $scopes = {

 		init: function() {

 			this.menuScripts();
 			this.homeSlider();
 		},

 		// scripts for Menu

 		menuScripts: function() {
 			this.$search = $('.search-btn');
 			this.$search.on('click', this.menu_toggledSearch);
 		},

 		menu_toggledSearch: function(event) {
 			this.$searchToggle = $('.main-search');
			this.$searchToggle.slideToggle('slow');
		},

		// Scripts for Slider
		
		homeSlider: function(){
			this.$sliderWrapper = $('.carousel-inner');
			this.$sliderItems = this.$sliderWrapper.find('.carousel-item');

			this.$sliderItems.each(function(index, el) {
				var instance  = $(this),
					image     = instance.find('a > img'),
					image_src = image.attr('src');

				instance.css('background-image','url('+ image_src +')');

			});
		},
 	}

 	// Trigger functions
 	$scopes.init();