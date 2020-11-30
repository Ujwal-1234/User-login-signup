<?php

if(isset($_POST['signup-submit'])){
	require 'dbh.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if(empty($username)||empty($username)||empty($username)){
		header("Location: learn1.php?error=emptyfields&uid=".$username."&email :".$email);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: learn1.php?error=Invalidemail&uid=".$username."&email :".$email);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: learn1.php?error=Invalidemail&uid=".$username."&email :".$email);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location: learn1.php?error=Invalideuid&mail=".$username."&email :".$email);
		exit();
	}
	else if($password!==$passwordRepeat){
		header("Location: learn1.php?error=check_password&mail=".$username."&email :".$email);
		exit();	
	}
	else{
		$sql = "SELECT uidusers FROM users WHERE uidusers=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: learn1.php?error=sql_error1");
			exit();	
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck=mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: learn1.php?error=userTaken&mail=".$username."&email :".$email);
				exit();	
			}
			else{
				$sql = "INSERT INTO users (uidusers, emailusers, pwdusers) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: learn1.php?error=sql_eror2");
						exit();	
				}
				else{
					$hashedPwd=password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss",$username,$email,$hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: learn1.php?signup=success");
					exit();	
				}

			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else{
	header("Location: index.php");
	exit();
}