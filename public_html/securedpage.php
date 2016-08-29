<?php
require '../include/session.php';

$title = "Secured Page";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>
		<article>
			<header>
				<h2>Welcome <b><?php echo $_SESSION['username']; ?></b></h2>
				<br><br>
			</header>
			<section>
				<p>You have entered the security-zone. You are not able to see this page without the correct credentials. Escape is futile.</p>
			</section>
		</article>

		<article>
			<h3>
				<a href="../public_html/music.php">muziek</a>
			</h3>
		</article>

<?php include_once '../themes/footer.php'; ?>