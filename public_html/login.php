<?php
session_start();

$title = "Login / Register";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="featured-wrapper">
	<div id="featured" class="extra2 margin-btm container">
		<div class="ebox1"> 
			<div class="title">
				<h2>Inloggen</h2>
			</div>
			<form method="POST" action="../include/login-process.php">
				<table style="margin-left: 20%;">
					<tr>
						<td><label for="email">Email </label></td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td><input class="button" type="submit" name="login" value="log in"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="ebox2">
			<div class="title">
				<h2>Registreren</h2>					
			</div>
			<form method="POST" action="../include/register-process.php">
				<table style="margin-left: 15%;">
					<tr>
						<td><label for="email">E-mailadres </label></td>
						<td><input type="text" name="email" required><span style="color: red;"> *</span></td>
					</tr>
					<tr>
						<td><label for="voornaam">Voornaam </label></td>
						<td><input type="voornaam" name="voornaam" required><span style="color: red;"> *</span></td>
					</tr>
					<tr>
						<td><label for="achternaam">Achternaam </label></td>
						<td><input type="achternaam" name="achternaam" required><span style="color: red;"> *</span></td>
					</tr>
					<tr>
						<td><label for="password">Wachtwoord </label></td>
						<td><input type="password" name="password" required><span style="color: red;"> *</span>
							<!--<label style="display: block;"><input type="checkbox" name="passwordvisible" id="passwordvisible" >Show password</label></td>-->
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" required>Ik accepteer de  <a href="../public_html/tos.php" target="_blank">Gebruikersvoorwaarden.</a></td>
					</tr>
					<tr>
						<td><input class="button" type="submit" name="register" value="register"></td>
					</tr>
					
				</table>
			</form>
		</div>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>