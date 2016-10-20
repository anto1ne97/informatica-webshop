$(document).ready(function() {
	$('.password').click(function() {
		var e=document.getElementsByName('password')[1]
		if(e.type=="password"){
			e.type="text"
		}
		else{
			e.type="password"
		}
	});
});