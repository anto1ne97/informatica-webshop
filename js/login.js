$(document).ready(function() {
	$('.password').click(function() {
		var e=document.getElementsByName('passwordvisible')[1]
		if(e.type=="password"){
			e.type="text"
		}
		else{
			e.type="password"
		}
	});
});

// TODO FIX: password === "text" when submitting while password is shown