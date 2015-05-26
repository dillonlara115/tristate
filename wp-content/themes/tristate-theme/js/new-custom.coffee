(($) ->
	$(document).ready ->
	  $('#simple-menu').sidr side: 'right'
		

	$('.page').on 'click', ->
		$.sidr 'close'
			

	$(window).on 'resize', ->
	  if $('body').hasClass('sidr-open') and $(window).width() >= 768
	  	$.sidr 'close'
	  	
	totalNumberOfAttendees = $('.attendee-number option:selected').text()
		
	$('.attendee-number').on 'change', ->
		totalNumberOfAttendees
		console.log(totalNumberOfAttendees)



	
	$blip = $('.blip');

	$('#primary-menu>li').on 'mouseover', ->
		$blip.css({ left: $(this).offset().left  - $(this).parent().offset().left , width: $(this).width() - 14 });

	$('#primary-menu').on 'mouseout', ->
		$('.blip').css({left: 0, width: 50});
	

) jQuery