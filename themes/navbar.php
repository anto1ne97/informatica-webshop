<main>
	<nav>
		<h1><a href="/webshop/public_html/index.php" class="logo">Amanda & Co. Pannenkoeken</a></h1>
		<ul>
			<li><a href="/webshop/public_html/index.php">Home</a></li>
			<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
			<li><a href="/webshop/public_html/#.php">Placeholder Text</a>
			<?php if (isset($_SESSION['username'])) : ?>
				<ul>
					<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
					<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
					<li><a href="/webshop/public_html/#.php">Placeholder Text</a></li>
				</ul>
			<?php endif; ?>
			</li>
			<li><a href="/webshop/public_html/contact.php">Contact</a></li>
			<?php if (isset($_SESSION['username'])) : ?>
				<li><a href="/webshop/include/logout.php">Logout</a></li>
			<?php else : ?>
				<li><a href="/webshop/public_html/login.php">Login / Register</a></li>
			<?php endif; ?>
		</ul>	
	</nav>