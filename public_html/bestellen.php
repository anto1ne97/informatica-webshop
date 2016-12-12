<?php
session_start();

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner">
		<h2>Amanda & Co. Pannenkoeken</h2>
		<p>Welkom bij Amanda & Co. Pannenkoeken Restaurant. Dit is een heel gezellig restaurant op planeet Aarde in een zonnesysteem in het sterrenstelsel genaamd Melkweg. Kan iemand hier een tekst bedenken?</p>
		<a href="/webshop/public_html/bestellen.php" class="button">Bestel nu</a>
	</div>
</div>

<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="extra2 margin-btm container">
			<div class="main-title">
				<h2>Nulla eleifend purus</h2>
				<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
			</div>	
			<div class="ebox1"> <span class="fa fa-pagelines"></span>
				<div class="title">
					<h2>Fusce ultrices fringilla</h2>
					<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
				</div>
				<p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. </p>
				<a href="#" class="button">Etiam posuere</a>
			</div>
			<div class="ebox2"> <span class="fa fa-anchor"></span>
				<div class="title">
					<h2>Donec dictum metus</h2>
					<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
				</div>
				<p>Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus.</p>
				<a href="#" class="button">Etiam posuere</a>
			</div>
		</div>
		<div class="extra2 container">
			<div class="ebox1"> <span class="fa fa-puzzle-piece"></span>
				<div class="title">
					<h2>Etiam rhoncus volutpat</h2>
					<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
				</div>
				<p>Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet. Pellentesque viverra vulputate enim.</p>
				<a href="#" class="button">Etiam posuere</a>
			</div>
			<div class="ebox2"> <span class="fa fa-comments-o"></span>
				<div class="title">
					<h2>Mauris vulputate dolor</h2>
					<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
				</div>
				<p>Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. </p>
				<a href="#" class="button">Etiam posuere</a>
			</div>
		</div>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>