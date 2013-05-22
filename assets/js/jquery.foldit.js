(function( $ ) {
	$.fn.foldIt = function( options ) {
		var settings = $.extend({
			'height': '70'
		}, options );
		return this.each(function() {
			var $container = $(this);
			$container.css({
				'position': 'relative',
				'overflow': 'hidden'
			}).data('height_orig', $container.height());

			var $unFoldBtn = $('<button class="btn btn-block btn-mini" type="button"></button>');
			$unFoldBtn.html('<i class="icon-chevron-down"></i>').css({
				'position': 'absolute',
				'bottom': '0'
			}).click(function() {
				$container.animate({
					height: $container.data('height_orig')
				});
				$(this).hide();
			});

			// $unFoldBtn.appendTo($container);
			$container.animate({
				height: settings.height
			}, 'fast', function() {
				$(this).append($unFoldBtn);
			});
		});
	};
}( jQuery ));