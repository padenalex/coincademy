jQuery(function($) {
	$padding = parseInt($(".max-width").css('marginLeft'))+20;
	$("#max-width-hold").css("padding-left", $padding);
	$("#max-width-hold .syllabus-card:last-child").css("margin-right", $padding);
	
	if (!is_touch_device()) {
		var instance = $("#max-width-hold").overlayScrollbars({}).overlayScrollbars();
		var instances = $(".syllabus-card").overlayScrollbars({}).overlayScrollbars();
	}
	
	$(window).resize(function() {
		$padding = parseInt($(".max-width").css('marginLeft'))+20;
		$("#max-width-hold").css("padding-left", $padding);
		$("#max-width-hold .syllabus-card:last-child").css("margin-right", $padding);
	});
	

});


function is_touch_device() {
	  var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
	  var mq = function(query) {
	    return window.matchMedia(query).matches;
	  }

	  if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
	    return true;
		}
		
	  var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
	  return mq(query);
	}