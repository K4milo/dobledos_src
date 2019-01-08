/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	__webpack_require__(1);
	__webpack_require__(2);
	__webpack_require__(6);
	__webpack_require__(8);
	module.exports = __webpack_require__(10);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

	/**
	 * This is the entry point for specific javascript of theme
	 */

	(function ($) {

	  var $scopes = {

	    init: function () {

	      this.menuScripts();
	      this.homeSlider();
	    },

	    // scripts for Menu

	    menuScripts: function () {
	      this.$search = $('.search-btn');
	      this.$search.on('click', this.menu_toggledSearch);
	    },

	    menu_toggledSearch: function (event) {
	      this.$searchToggle = $('.main-search');
	      this.$searchToggle.slideToggle('slow');
	    },

	    // Scripts for Slider

	    homeSlider: function () {
	      this.$sliderWrapper = $('.homeslider-container');
	      this.$sliderItems = this.$sliderWrapper.find('.slide');

	      this.$sliderItems.each(function (index, el) {
	        var instance = $(this),
	            image = instance.find('a > img'),
	            image_src = image.attr('src');

	        instance.css('background-image', 'url(' + image_src + ')');
	      });
	    }

	    // Trigger functions
	  };$scopes.init();
	})(jQuery);

/***/ }),
/* 2 */
/***/ (function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */
/***/ (function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ }),
/* 7 */,
/* 8 */
/***/ (function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ }),
/* 9 */,
/* 10 */
/***/ (function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);