(($) ->
	$(document).ready ->
	  $('#simple-menu').sidr side: 'right'
		

	$('.page').on 'click', ->
		$.sidr 'close'
			

	$(window).on 'resize', ->
	  if $('body').hasClass('sidr-open') and $(window).width() >= 768
	  	$.sidr 'close'
		

	memberCount = $('.member-count')
	regularCount = $('.reg-count')

	console.log('test')
	memberCount.on 'blur', -> 
		console.log(memberCount.val())

	$blip = $('.blip');

	$('#primary-menu>li').on 'mouseover', ->
		$blip.css({ left: $(this).offset().left  - $(this).parent().offset().left , width: $(this).width() - 14 });

	$('#primary-menu').on 'mouseout', ->
		$('.blip').css({left: 0, width: 50});
	

) jQuery