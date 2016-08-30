<?php if (isset($_SESSION['username'])) : ?>
	<article>
		<header>
			<h2>You are logged in as: <b><?php echo $_SESSION['username']; ?></b></h2>
		</header>
	</article>
<?php else : ?>
<?php endif; ?>