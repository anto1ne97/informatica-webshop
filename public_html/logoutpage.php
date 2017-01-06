<?php
header("refresh: 3; url=../public_html/index.php");

$title = "Logout";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>
<div id="header-featured">
	<div id="banner">
		<h2>Logout successful.</h2>
		<article>
			You will be redirected to the home page in 3 seconds.
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>