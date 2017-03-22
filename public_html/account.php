<?php
require '../include/session.php';

$title = "Mijn Account";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner">
		<article>
			<div class="title">
				<h2>Gegevens van <?php echo $_SESSION['email']; ?></h2>					
			</div>
			<form method="POST" action="../include/account-process.php" class="js-form">
				<table style="margin-left: 15%; text-align: left;">
					<tr>
						<td><label for="voornaam">Voornaam</label></td>
						<td><input type="text" name="voornaam" required><span class="asterisk">*</span></td>
						<td><label for="achternaam">Achternaam</label></td>
						<td><input type="text" name="achternaam" required><span class="asterisk">*</span></td>
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
						<td><label for="form-password">Wachtwoord</label></td>
						<td><input type="password" name="password" class="js-password" id="form-password" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><input type="submit" class="button js-submit" name="update" value="updaten"></td>
					</tr>
				</table>
			</form>
		</article>
		
		<article>
			<form method="POST" action="../include/editpassword.php">
				<table style="margin-left: 15%; text-align: left;">
					<tr>
						<td><label for="old-password">Oude wachtwoord</label></td>
						<td><input type="password" name="password0" id="old-password" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="new-password1">Nieuwe wachtwoord</label></td>
						<td><input type="password" name="password1" id="new-password1" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="new-password2">Herhaal wachtwoord</label></td>
						<td><input type="password" name="password2" id="new-password2" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><input type="submit" class="button js-submit" name="editpassword" value="wachtwoord wijzigen"></td>
					</tr>
				</table>
			</form>
		</article>

		<article>
			<button type="submit" class="button" formmethod="POST" formaction="..include/delete.php">Account verwijderen</button>
			<span><br></span>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>