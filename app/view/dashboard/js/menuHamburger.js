$('document').ready(function() {
	$('.sub-nav').each(function() {
		$(this).hide();
	});

	$('.nav-item').click(function() {
		$('.sub-nav').each(function() {
			$(this).slideUp("slow");
		});
		
		if ($(this).next('.sub-nav').is(':visible')) {
			$(this).next('.sub-nav').slideUp('slow');
		} else {
			$(this).next('.sub-nav').slideDown('slow');
		};
	});
});