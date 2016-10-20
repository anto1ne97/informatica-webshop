<?php
session_start();

$title = "Terms of Service";
include_once '../themes/header.php';
?>
	<main>
		<nav class="tos">
			<h1 class="logo">Amanda & Co. Pannenkoeken</h1>
		</nav>
		
		<article>
			<header>
				<h2>Terms of Service</h2>
			</header>
			<p>
				We happily collect your personal information. Name, address, bank accounts, nothing is secure. 
			</p>
			<br>
			<p>
				<a href="javascript:window.open('','_self').close();" class="closetab">Close this tab.</a>
			</p>
		</article>
		
<?php include_once '../themes/footer.php'; ?>