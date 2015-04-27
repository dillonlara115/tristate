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
	

) jQuery