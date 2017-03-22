<?php
require '../include/session.php';

$title = "Secured Page";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner">
		<article>
			<div class="title">
				<h2>Gegevens van <?php echo $_SESSION['email']; ?></h2>					
			</div>
			<form method="POST" action="../include/account.php" class="js-form">
				<table style="margin-left: 15%; text-align: left;">
					<tr>
						<td><label for="voornaam">Voornaam</label></td>
						<td><input type="text" name="voornaam"></td>
						<td><label for="achternaam">Achternaam</label></td>
						<td><input type="text" name="achternaam"></td>
					</tr>
					<tr>
						<td><label for="straat">Straat</label></td>
						<td><input type="text" name="straat" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="huisnummer">Huisnummer</label></td>
						<td><input type="text" name="huisnummer" required><span class="asterisk">*</span></td>
						<td><label for="toevoeging">Toevoeging</label></td>
						<td><input type="text" name="toevoeging"></td>
					</tr>
					<tr>
						<td><label for="woonplaats">Woonplaats</label></td>
						<td><input type="text" name="woonplaats" required><span class="asterisk">*</span></td>
						<td><label for="postcode">Postcode</label></td>
						<td><input type="text" name="postcode" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="telefoonnummer">Telefoonnummer</label></td>
						<td><input type="text" name="telefoonnummer" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="email">E-mailadres</label></td>
						<td><input type="email" name="email" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="form-password">Wachtwoord</label></td>
						<td><input type="password" class="js-password" id="form-password" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><input type="submit" class="button js-submit" name="update" value="updaten"></td>
					</tr>
				</table>
			</form>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>