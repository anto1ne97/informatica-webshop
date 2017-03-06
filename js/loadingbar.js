function move() {
	var e = document.getElementById('myBar');
	var width = 1;
	var id = setInterval(frame, 10);
	function frame(argument) {
		if (width >= 100) {
			clearInterval(id);
		} else {
			width++;
			e.style.width = width + '%';
		}
	}
}