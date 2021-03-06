<?php
session_start();

$title = "Inloggen / Registreren";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>

<div id="header-featured">
	<div id="banner" class="extra2 margin-btm ">
		<article class="ebox1"> 
			<div class="title">
				<h2>Inloggen</h2>
			</div>
			<form method="POST" action="../include/login-process.php" class="js-form">
				<table style="margin-left: 20%; text-align: left;">
					<tr>
						<td><label for="email">E-mailadres</label></td>
						<td><input type="email" name="email"></td>
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
			<form method="POST" action="../include/register-process.php" class="js-form">
				<table style="margin-left: 15%; text-align: left;">
					<tr>
						<td><label for="email">E-mailadres</label></td>
						<td><input type="email" name="email" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><label for="form-password">Wachtwoord</label></td>
						<td><input type="password" name="password" class="js-password" id="form-password" required><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td colspan="2"><label><input type="checkbox" required>Ik accepteer de <a href="../public_html/tos.php" target="_blank">Gebruikersvoorwaarden.</a></label><span class="asterisk">*</span></td>
					</tr>
					<tr>
						<td><input  class="button js-submit" type="submit" name="register" value="registreren"></td>
					</tr>
				</table>
			</form>
		</article>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>