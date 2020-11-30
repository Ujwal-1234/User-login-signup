<?php
	session_start();
?>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="this is and example of a meta description. This will often show up in search results.">
		<meta name= viewreport content="width=device-width, initial-scale=1">
		<title>LOGIN_PAGE</title>
		<link rel="stylesheet"  href="style.php">
	</head>
	<body>

		<header>
		<div class="top d-none d-lg-block">
			<nav class="heading text-right text-md-center" role="navigation" style=" background-color:lightblue">
			<p>
			<a href="index.php">
				<img src="LOGO.PNG" width="200px" height="150px">&nbsp;&nbsp;&nbsp;&nbsp;
				</a>
				<a href="index.php"> HOME&nbsp;&nbsp;&nbsp;&nbsp; </a>
				<a href="#"> PORTFOLIO &nbsp;&nbsp;&nbsp;&nbsp;</a>
				<a href="#"> ABOUTME &nbsp;&nbsp;&nbsp;&nbsp;</a>
				<a href="#"> CONTACTUS &nbsp;&nbsp;&nbsp;&nbsp;</a></p>

				</nav>
				</div><center>
				<div class="header-login" style="width:200px">


							<?php
								if (isset($_SESSION['userid'])) {
								echo '<form action="logout.php" method="post">
										<button type="submit" name="logout-submit">logout</button>

									</form>';

								}
								else {
									echo '<form action="login.php" method="post"><input type="text" name="mailuid" placeholder="usename/Email..."><br><br>
										<input type="password" name="pwd" placeholder="password..."><br><br><br>
										<button type="submit" name="login-submit">Login</button></form>or <br>
										<form action="learn1.php" method="post">
										<button type="submit" name="sign-up">SIGNup</button><br><br>
											</form>
											<form action="forget.php" method="post"><button type="submit" name="forget">forget_password?</button></form>';
									}
							?>
				</div>

			</center>
		</header>
	</body>
