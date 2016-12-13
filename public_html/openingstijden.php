<?php
session_start();

$title = "Amanda & Co. Pannenkoeken";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner">
		<h2>Openingstijden</h2>
		<article>
			<table id="openingstijden">
				<tr>
					<td>Maandag:</td>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<td>Dinsdag:</td>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<td>Woensdag:</td>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<td>Donderdag:</td>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<td>Vrijdag:</td>
					<td>9:00 -  0:00</td>
				</tr>
				<tr>
					<td>Zaterdag:</td>
					<td>0:00 -  0:00</td>
				</tr>
				<tr>
					<td>Zondag:</td>
					<td>9:00 - 22:00</td>
				</tr>
			</table>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>