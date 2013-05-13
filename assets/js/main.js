$(function() {
	$('input[placeholder], textarea[placeholder]').placeholder();
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

	var $container = $('.pins');
	$container.imagesLoaded( function() {
		$container.masonry({
			itemSelector: '.pin_wrapper',
			// columnWidth: 270,
			isAnimated: true,
			isResizable: true
		});
	});
	$container.infinitescroll({
		navSelector: '.ngg-navigation',
		nextSelector: '.ngg-navigation .next',
		itemSelector: '.pin_wrapper'
	},function ( newElements ) {
		var $newElems = $(newElements).css({opacity: 0});
		$newElems.imagesLoaded(function() {
			$newElems.animate({ opacity: 1 });
			$container.masonry( 'appended', $newElems, true );
		});
	});
});