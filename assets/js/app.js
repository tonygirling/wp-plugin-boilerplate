/**
 * Sample JS file - to demonstrate how to load in a WordPress plugin.
 * 
 * @package WordPressPluginPackage
 */

var sample_app = function() {

	var init = function () {
		window.addEventListener( 'scroll', action_on_scroll );
	}

	var action_on_scroll = function() {
		// Indicate it's all wired up correctly.
		console.log( 'Scrollin, scrollin, scrollin' );
	}

	return {
		init: init,
	}
}();

window.addEventListener(
	'load',
	function (event) {
		sample_app.init();
	}
);
