$(function() {
	$('.duoi2').animate({opacity:0, marginLeft: -2000})
	$('.tdt').click(function(event) {
	/* Act on the event */
	$('.tdt').removeClass('xam');
	$(this).addClass('cam');
	$('.tdp').removeClass('cam');

	$('.duoi2').animate({opacity: 0, marginLeft:-2000})
	$('.duoi1').animate({opacity: 1, marginLeft:0})


});
	$('.tdp').click(function(event) {
		/* Act on the event */
		$(this).addClass('cam');
		$('.tdt').addClass('xam');
		
		$('.duoi1').animate({opacity: 0, marginLeft: -2000})
		$('.duoi2').animate({opacity: 1, marginLeft: 0})
	});


});