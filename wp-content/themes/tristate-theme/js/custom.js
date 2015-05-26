(function($){

$(document).ready(function() {
    $("#simple-menu").sidr({
        side: "right"
    });
});

$(".page").on("click", function() {
    $.sidr("close");
});

$(window).on("resize", function() {
    if ($("body").hasClass("sidr-open") && $(window).width() >= 768) {
        $.sidr("close");
    }
});

$('.attendee-number').on('change', function() {
	var totalNumberOfAttendees = $('.attendee-number option:selected').text();
	console.log(totalNumberOfAttendees);
	if (totalNumberOfAttendees == 2) {
		for (var i = 22; i <= 28; i++ ) {
			$('#field_2_' + i).css('display', 'block');
		}
	} else if (totalNumberOfAttendees == 3) {
		for (var i = 22; i <= 36; i++ ) {
			$('#field_2_' + i).css('display', 'block');
		}
	} else if (totalNumberOfAttendees == 4) {
		for (var i = 22; i <= 43; i++ ) {
			$('#field_2_' + i).css('display', 'block');
		}
	} else if (totalNumberOfAttendees == 5) {
		for (var i = 22; i <= 50; i++ ) {
			$('#field_2_' + i).css('display', 'block');
		}
	} else if (totalNumberOfAttendees == 6) {
		for (var i = 22; i <= 57; i++ ) {
			$('#field_2_' + i).css('display', 'block');
		}
	} else {
		for (var i = 22; i <= 57; i++ ) {
			$('#field_2_' + i).css('display', 'none');
		}
	}
});

var    $blip = $('.blip');
$('#primary-menu>li').on('mouseover', function() {
  return $blip.css({
    left: $(this).offset().left - $(this).parent().offset().left,
    width: $(this).width() - 14
  });
});

})(jQuery);