
$(document).ready(function() {
	closeAllDropdown();

	$('[data-dropdown]').click(function() {
		let dropdown = '#dropdown-' + $(this).data('dropdown');
		openOrCloseDropdown(dropdown);
	});
});

function closeAllDropdown() {
	$('[data-dropdown]').each(function() {
		let dropdown = '#dropdown-' + $(this).data('dropdown');
		$(dropdown).hide();
	});
}

function openOrCloseDropdown(dropdown) {
	let status = $(dropdown).is(':visible');

	if (status) 
		$(dropdown).slideUp('slow');
	else 
		$(dropdown).slideDown('slow');
}