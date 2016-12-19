<?php
session_start();

$title = "Login / Register";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner" class="extra2 margin-btm ">
		<article class="ebox1"> 
			<div class="title">
				<h2>Inloggen</h2>
			</div>
			<form method="POST" action="../include/login-process.php">
				<table style="margin-left: 20%; text-align: left;">
					<tr>
						<td><label for="email">E-mailadres</label></td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td><label for="password">Wachtwoord</label></td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td><input class="button" type="submit" name="login" value="log in"></td>
					</tr>
				</table>
			</form>
		</article>
		<article class="ebox2">
			<div class="title">
				<h2>Registreren</h2>					
			</div>
			<form method="POST" action="../include/register-process.php">
				<table style="margin-left: 15%; text-align: left;">
					<tr>
						<td><label for="email">E-mailadres</label></td>
						<td><input type="text" name="email" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="voornaam">Voornaam</label></td>
						<td><input type="text" name="voornaam" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="achternaam">Achternaam</label></td>
						<td><input type="text" name="achternaam" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="password">Wachtwoord</label></td>
						<td><input type="password" name="password" required><span class="asterisk">*</span>
							<!--<label style="display: block;"><input type="checkbox" name="passwordvisible" id="passwordvisible" >Show password</label></td>-->
					</tr>
					<tr>
						<td colspan="2"><label><input type="checkbox" required>Ik accepteer de <a href="../public_html/tos.php" target="_blank">Gebruikersvoorwaarden.</a></label></td>
					</tr>
					<tr>
						<td><input class="button" type="submit" name="register" value="registreren"></td>
					</tr>
				</table>
			</form>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>