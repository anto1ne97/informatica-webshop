var limit = 3;
$('input.magic-checkbox').on('change', function(evt) {
	if($("input[name='group4']:checked").length > limit) {
		this.checked = false;
	}
});