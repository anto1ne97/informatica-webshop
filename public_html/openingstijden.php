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
					<th>Maandag:</th>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<th>Dinsdag:</th>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<th>Woensdag:</th>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<th>Donderdag:</th>
					<td>9:00 - 22:00</td>
				</tr>
				<tr>
					<th>Vrijdag:</th>
					<td>9:00 -  0:00</td>
				</tr>
				<tr>
					<th>Zaterdag:</th>
					<td>0:00 -  0:00</td>
				</tr>
				<tr>
					<th>Zondag:</th>
					<td>9:00 - 22:00</td>
				</tr>
			</table>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>