$(function() {
	$(".news .readmore").fadeTo("fast", 0);
	$(".news").hover(
		function() {
			$(this).find(".readmore").fadeTo("fast", 1);
		},
		function() {
			$(this).find(".readmore").fadeTo("fast", 0);
		}
	);
	$(".carousel").carousel();
	
	var $container = $('.thumbnails');
	$container.imagesLoaded( function() {
		$container.masonry({
			itemSelector: '.box'
		})
	});
});