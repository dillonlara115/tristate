(($) ->
$(document).ready ->
  $('#simple-menu').sidr side: 'right'
return

$('.page').on 'click', ->
  $.sidr 'close'
return

$(window).on 'resize', ->
  if $('body').hasClass('sidr-open') and $(window).width() >= 768
    $.sidr 'close'
return

memberCount = $('.member-count')
regularCount = $('.reg-count')

console.log('test')
memberCount.on 'blur', -> 
	console.log(memberCount.val())
	

) jQuery