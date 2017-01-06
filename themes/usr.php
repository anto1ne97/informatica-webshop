<?php if (isset($_SESSION['email'])) : ?>
	<article>
		<header>
			<h2>You are logged in as: <b><?php echo $_SESSION['email']; ?></b></h2>
		</header>
	</article>
<?php else : ?>
<?php endif; ?>