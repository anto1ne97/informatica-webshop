<?php
session_start();

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>
<!---------------------------------->
<body class="homepage">
	<div id="page-wrapper">
		<div id="header">
			<div class="inner">
				<header>
					<h1><a href="../public_html/index.php" id="logo">Amanda & Co</a></h1>
					<hr />
					<p>Het beste pannenkoekenrestaurant uit Amersfoort!</p>
				</header>

				<footer>
					<a href="../public_html/bestellen.php" class="button circled scrolly">Bestel nu!</a>
				</footer>
			</div>
		</div>
<!---------------------------------->
	<article>
		<header>
			<h2>Welkom!</h2>
		</header>
			<p>
				Hier bestellen.
			</p>
		</article>

		<article>
			<header>
				<h2>Features</h2>
			</header>
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</article>

<?php include_once '../themes/footer.php'; ?>