$('document').ready(function() {
	$('.nav-item').click(function() {

		$('.sub-nav').each(function() {
			$(this).slideUp('slow');
		});

		if (status)
			$(this).next('.sub-nav').slideUp('slow');
		else
			$(this).next('.sub-nav').slideDown('slow');
	});
});

$('.sub-nav').each(function() {
	$(this).hide();
});