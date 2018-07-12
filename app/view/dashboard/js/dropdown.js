
$(document).ready(function() {
	$('#dropdown-user').hide();
	$('#dropdown-message').hide();
	$('#dropdown-notification').hide();

	$('#user').click(function() {
		let dropdown = $('#dropdown-user').select();
		let status = $(dropdown).is(':visible');
		openCloseDropdown(status, dropdown);
	});

	$('#message').click(function() {	
		let dropdown = $('#dropdown-message').select();
		let status = $(dropdown).is(':visible');
		openCloseDropdown(status, dropdown);
	});

	$('#notification').click(function() {
		let dropdown = $('#dropdown-notification').select();
		let status = $(dropdown).is(':visible');
		openCloseDropdown(status, dropdown);
	});
});


function openCloseDropdown(status, dropdown) {
	if (status)
		$(dropdown).slideUp('slow');
	else
		$(dropdown).slideDown('slow');
}