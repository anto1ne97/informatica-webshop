<?php
require '../include/session.php';

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner">
		<h2>Welkom <b><?php echo $_SESSION['email']; ?></b></h2>
		<article>
			U heeft met succes de bestelling afgerond.
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>