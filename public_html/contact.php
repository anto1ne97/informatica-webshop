<?php
session_start();

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner">
		<h2>Contact</h2>
		<article>
			<div>Klachten? Suggesties? Opmerkingen? Neem contact met ons op!</div></br>
			<table id="contact">
				<tr>
					<th rowspan="2">Adres:</th>
					<td>Paladijnenweg 101</td>
				</tr>
				<tr>
					<td>3813 DC Amersfoort</td>
				</tr>
				<tr>
					<th>E-mail:</th>
					<td>info@amandaenco.nl</td>
				</tr>
				<tr>
					<th>Telefoon:</th>
					<td>033 422 90 20</td>
				</tr>
				<tr>
					<th>Mobiel:</th>
					<td>06 47295734</td>
				</tr>
				<tr>
					<th>KVK nummer:</th>
					<td>320 895 20</td>
				</tr>
			</table>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>