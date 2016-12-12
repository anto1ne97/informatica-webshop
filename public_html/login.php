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
				<h2>Login</h2>
			</div>
			<form method="POST" action="../include/login-process.php">
				<table style="margin-left: 20%;">
					<tr>
						<td class="width100px"><label for="username">Username </label></td>
						<td><input type="text" name="username"></td>
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
						<td><label for="username">Username </label></td>
						<td><input type="text" name="username" required><span style="color: red;"> *</span></td>
					</tr>
					<tr>
						<td><label for="password">Password </label></td>
						<td><input type="password" name="password" required><span style="color: red;"> *</span>
							<!--<label style="display: block;"><input type="checkbox" name="passwordvisible" id="passwordvisible" >Show password</label></td>-->
					</tr>
					<tr>
						<td><label for="email">Email </label></td>
						<td><input type="email" name="email" required><span style="color: red;"> *</span></td>
					</tr>
					<tr>
						<td><input class="button" type="submit" name="register" value="register"></td>
					</tr>
					<tr>
						<td colspan="2">Read the <a href="../public_html/tos.php" target="_blank">boring legal stuff.</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<?php include_once '../themes/footer.php'; ?>