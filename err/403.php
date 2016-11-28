<?php
session_start();

$title = "403";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
include_once '../themes/usr.php';
?>
		<article>
			<header>
				<h2>403</h2>
			</header>
			<p>
				Whoa! Stop right there. You are not allowed on this page. You will be removed.
			</p>
		</article>


<?php include_once '../themes/footer.php'; ?>