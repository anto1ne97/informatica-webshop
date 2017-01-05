$( function() {
	// Cache our jquery elements
	var $form = $(".js-form");
	var $submit = $(".js-submit");
	var $field = $(".js-password");
	var _template = "<a href='#' class='js-password-toggle form__toggle'><i class='fa fa-eye form__toggle-button'></a>";
	
	// Inject the toggle button into the page
	$field.after( _template );
	
	// Cache the toggle button
	var $toggle = $(".js-password-toggle");
	
	// Toggle the field type
	$toggle.on("click", function(e) {
		e && e.preventDefault();
		if ($field.attr("type") == "password") {
			$field.attr("type","text");
			$(e.target).removeClass("fa-eye").addClass("fa-eye-slash");
		} else {
			$(e.target).removeClass("fa-eye-slash").addClass("fa-eye");
			$field.attr("type","password");
		}
	});
	
	// Set the form field back to a regular password element
	$submit.on( "click", function(e) {
		e && e.preventDefault();
		$field.attr("type","password");
	});
});