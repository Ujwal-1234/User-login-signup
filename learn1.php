<?php
	require "header.php";
?>
	<main>
		<div class="wrapper-main">
			<section class="section-default">
			<center>
				<h1 style="background-color:yellow; font-style:inherit;color:navy">signup</h1>
				</center>
				<?php
					if (isset($_GET['error'])) {
						if ($_GET['error']=="emptyfields") {
							echo '<p class = "signuperror">Fill in all fields</p>';
						}
					}
				?>
				<center>
				<?php
				if(isset($_POST['sign-up'])){echo'
					<form action="learn.php" method="post">
					<input type="text" name="uid" placeholder="username"><br><br>
					<input type="text" name="mail" placeholder="Email"><br><br>
					<input type="password" name="pwd" placeholder="password"><br><br>
					<input type="password" name="pwd-repeat" placeholder="repeat-password"><br><br>
					<br><br><button type="submit" name="signup-submit">signup</button><br><br>
				</form>';
				}
				?>
				</center>
			</section>
		</div>
	</main>

<?php
	require "footer.php";
?>