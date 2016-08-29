<?php
session_start();

$title = "Login / Register";
include_once '../themes/header.php';
include_once '../themes/navbar.php';
?>
		<article>
			<table class="reglog">
				<tr>
					<td class="valignTop rl-line">
						<h2>Login</h2>
						<div class="form">
							<form id="form-register-box" method="POST" action="../include/login-process.php">
								<table class="formtable valignTop">
									<tr>
										<td class="width100px"><label for="username">Username </label></td>
										<td><input type="text" name="username"></td>
									</tr>
									<tr>
										<td><label for="password">Password</label></td>
										<td><input type="password" name="password"></td>
									</tr>
									<tr>
										<td><input class="formbutton" type="submit" name="login" value="log in"></td>
									</tr>
								</table>
							</form>
						</div>
					</td>
					<td class="valignTop pl30px">
						<h2>Register</h2>
						<div class="form">
							<form method="POST" action="../include/register-process.php">
							  <table class="formtable">
									<tr>
										<td class="width100px"><label for="username">Username </label></td>
										<td><input type="text" name="username" required><span class="asterisk"> *</span></td>
									</tr>
									<tr>
										<td>Password </td>
										<td><input type="password" name="password" required><span class="asterisk"> *</span>
											<label class="small lightgrey nowrap block">
												<input type="checkbox" name="password" class="password" value="sp">Show password</label></td>
									</tr>
		<!--							<tr>
										<td><label for="email">Email </label></td>
										<td><input type="email" name="email" required><span class="asterisk"> *</span></td>
									</tr>
		-->
									<tr>
										<td><input class="formbutton" type="submit" name="register" value="register"></td>
									</tr>
									<tr>
										<td class="small lightgrey" colspan="2">Read the <a href="../public_html/tos.php" target="_blank">boring legal stuff.</a></td>
									</tr>
								</table>
							</form>
						</div>
					</td>
				</tr>
			</table>
		</article>

<?php include_once '../themes/footer.php'; ?>