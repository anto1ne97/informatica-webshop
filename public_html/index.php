<?php
session_start();

$title = "Home";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
include_once '../themes/usr.php';
?>
		<article>
			<header>
				<h2>Home</h2>
			</header>
			<p>
				This is a webpage.
			</p>
		</article>

		<article>
			<header>
				<h2>Features</h2>
			</header>
			<ul>
				<li>Veilig inlogsysteem</li>
				<li>Gehashte wachtwoorden d.m.v. BCrypt</li>
				<li>Beveiliging tegen SQL-injectie</li>
				<li></li>
				<li>Dynamisch html (verschillende weergaven op basis van php)</li>
				<li></li>
			</ul>
		</article>

<?php include_once '../themes/footer.php'; ?>