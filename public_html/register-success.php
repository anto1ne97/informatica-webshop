<?php
require '../include/session.php';
header("refresh: 3; url=../public_html/securedpage.php");

$title = "Registration";
include_once '../themes/header.php';
?>
	<main>
		<nav class="tos">
			<h1><a href="../public_html/index.php" class="logo">Amanda & Co. Pannenkoeken</a></h1>
		</nav>

		<article>
			<header>
				<h2>Welcome!</h2>
			</header>
			<p>
				Your registration has been successful. Please wait while your credentials are being processed.
			</p>
		</article>

<?php include_once '../themes/footer.php'; ?>