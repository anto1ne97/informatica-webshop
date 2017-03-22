<nav class="container">
	<div id="logo">
		<h1><a href="/webshop/public_html/index.php">Amanda &amp; Co.</a></h1>
	</div>
	<div id="menu">
		<ul>
			<?php if (isset($_SESSION['email'])) : ?>
			<li><a href="/webshop/public_html/bestellen.php">Bestellen</a></li>
			<?php endif; ?>
			
			<li><a href="/webshop/public_html/openingstijden.php">Openingstijden</a></li>
			<li><a href="/webshop/public_html/about.php">Het Team</a></li>
			<li><a href="/webshop/public_html/contact.php">Contact</a></li>
			
			<?php if (isset($_SESSION['email'])) : ?>
			<li><a href="/webshop/public_html/securedpage.php">Mijn Account</a></li>
			<li><a href="/webshop/include/logout.php">Logout</a></li>
			<?php else : ?>
			<li><a href="/webshop/public_html/login.php">Mijn Account</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>
<main>