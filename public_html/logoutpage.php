<?php
header("refresh: 3; url=../public_html/index.php");

$title = "Logout";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>
		<article>
			<header>
				<h2>Logout successful.</h2>
			</header>
			<p>
				You will be redirected to the home page in 3 seconds.
			</p>
		</article>

<?php include_once '../themes/footer.php'; ?>