<?php
	require "header.php";
	print_r($_POST)
?>

	<main>
	<center>
		<div class="wrapper-main">
			<section class="section-default">
				<?php
				if (isset($_SESSION['userid'])) {
					echo '<p class="login-status">you are logged in!</p>';
					echo'<form action="upload.php" method="post" enctype="multipart/form-data">
  				<input type="file" name="fileToUpload" id="fileTUpload">
  				<input type="submit" value="Upload Image" name="submit">
					</form>
					<br>';

					echo'<br><form action="d_c.php" method="POST">
					<input type = "submit" value="EVERYDAY WORK"
					</form><br><br>
					<form action="ass.php" method="POST">
					<input type="submit" value= "ASSIGN A TASK"
					</form><br>';
					echo'
					<form>
					//timeline
					</form>
					';
			}
				else{
					echo '<p class="login-status"> you are logged out!</p>';
				}
				?>
			</section>
		</div>
	</center>

	</main>
<?php
	require "footer.php";
?>
