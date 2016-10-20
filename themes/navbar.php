<main>
	<nav>
		<h1><a href="../public_html/index.php" class="logo">Amanda & Co. Pannenkoeken</a></h1>
		<ul>
			<li><a href="../public_html/index.php">Home</a></li>
			<li><a href="../public_html/about.php">Placeholder Text</a></li>
			<li><a href="../public_html/portfolio.php">Placeholder Text</a>
			<?php if (isset($_SESSION['username'])) : ?>
				<ul>
					<li><a href="../public_html/#.php">Placeholder Text</a></li>
					<li><a href="../public_html/#.php">Placeholder Text</a></li>
					<li><a href="../public_html/#.php">Placeholder Text</a></li>
				</ul>
			<?php endif; ?>
			</li>
			<li><a href="../public_html/contact.php">Contact</a></li>
			<?php if (isset($_SESSION['username'])) : ?>
				<li><a href="../include/logout.php">Logout</a></li>
			<?php else : ?>
				<li><a href="../public_html/login.php">Login / Register</a></li>
			<?php endif; ?>
		</ul>	
	</nav>