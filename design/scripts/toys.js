$(document).ready(function() {
	var container = document.querySelector('#card_container');
	var msnry = new Masonry( container, {
	  // options
	  columnWidth: 10,
	  itemSelector: '.card'
	});
	
	var container = document.querySelector('#container');
	var msnry;
	// initialize Masonry after all images have loaded
	imagesLoaded( container, function() {
	  msnry = new Masonry( container );
	});
});