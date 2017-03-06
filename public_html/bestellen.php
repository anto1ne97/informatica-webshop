<?php
session_start();

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner" class="margin-btm bestellen">
		<div class="main-title">
			<h2>Stel je eigen pannekoek samen</h2>
		</div>
		<form method="POST" action="..include/orders.php">
			<article class="ebox1">
				<div >
					<h2>Kies je bodem</h2>
				</div>
				<div>
					<input type="checkbox" class="magic-checkbox" name="layout" id="1" value="naturel"></input>
					<label for="1"></label>
					<label class="text" for="1">Kleine bodem</label>
				</div>
				<div>
					<input type="checkbox" class="magic-checkbox" name="layout" id="2" value="naturel"></input>
					<label for="2"></label>
					<label class="text" for="2">Medium bodem</label>
				</div>
			</article>
			<article class="ebox1">
				<div>
					<h2>Kies je special</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
			<article class="ebox1">
				<div>
					<h2>Kies je toppings</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
			<article class="ebox1">
				<div>
					<h2>Kies je extra</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
			<article class="ebox1">
				<div>
					<h2>Drinken</h2>
				</div>
				<p>
					
				</p>
				<a href="#" class="button">button</a>
			</article>
		</form>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>