<?php
session_start();

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>


<div id="featured-wrapper">
	<div id="featured" class="extra2 margin-btm container">
		<div class="main-title">
			<h2>Onze (pannen)koekenbakkers</h2>
		</div>
		<div class="margin-btm"> <span class="image"><img src="../images/amandameulink.jpg" class="image-circle"></span>
			<div class="title">
				<h2>Amanda Meulink</h2>
				<span class="byline">Chief Executive Officer</span>
			</div>
			<p>Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ltrices in, est. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet. Pellentesque viverra vulputate enim.</p>
		</div>
		<div class="ebox1"> <span class="image"><img src="../images/antoinedegroot.jpg" class="image-circle"></span>
			<div class="title">
				<h2>Antoine de Groot</h2>
				<span class="byline">Senior Web Developer</span>
			</div>
			<p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis ibero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. </p>
		</div>
		<div class="ebox2"> <span class="image"><img src="../images/lucblankestijn.jpg" class="image-circle"></span>
			<div class="title">
				<h2>Luc Blankestijn</h2>
				<span class="byline">Database Expert</span>
			</div>
			<p>Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis atoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus.</p>
		</div>
	</div>
	<div class="extra2 container">
		<div class="ebox1"> <span class="image"><img src="../images/sjoerdgroneschild.jpg" class="image-circle"></span>
			<div class="title">
				<h2>Sjoerd Groneschild</h2>
				<span class="byline">Web Developer</span>
			</div>
			<p>Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ltrices in, est. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet. Pellentesque viverra vulputate enim.</p>
		</div>
		<div class="ebox2"> <span class="image"><img src="../images/jellevanderham.jpg" class="image-circle"></span>
			<div class="title">
				<h2>Jelle van der Ham</h2>
				<span class="byline">Telecommunications Specialist</span>
			</div>
			<p>Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, aculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. </p>
		</div>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>