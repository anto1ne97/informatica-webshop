<main>
	<nav>
		<h1><a href="../public_html/index.php" class="logo">Antoine de Groot</a></h1>
		<ul>
			<li><a href="../public_html/index.php">Home</a></li>
			<li><a href="../public_html/about.php">About me</a></li>
			<li><a href="../public_html/portfolio.php">Portfolio</a>
			<?php if (isset($_SESSION['username'])) : ?>
				<ul>
					<li><a href="../public_html/iwep.php">International Work Experience Project</a></li>
					<li><a href="../public_html/ib.php">International Baccalaureate</a></li>
					<li><a href="../public_html/projects.php">Other Projects</a></li>
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