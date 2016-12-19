<?php
require '../include/session.php';
header("refresh: 3; url=../public_html/securedpage.php");

$title = "Registration";
include_once '../themes/header.php';
?>

<div id="header-featured">
	<div id="banner">
		<h2>Welkom <b><?php echo $_SESSION['username']; ?></b></h2>
		<article>
			U heeft met succes de registratie afgerond. Een ogenblik geduld alstublieft.
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>