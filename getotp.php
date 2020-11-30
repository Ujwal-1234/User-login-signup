<?php
$status=0;
if(isset($_POST['number-submit'])){
  if(empty($_POST['number'])){
    header("Location: forget.php?INPUT_NUMBER");
  }else {
    $otp = rand(1000, 9999);
    $mobileNumber = $_POST['number'];
    // Authorisation details.
    $username = "kujwal147@gmail.com";
    $hash = "e4b7721ec98ac35a8e81c85681ac10a9f3b9d19d53182255e02b9878afab31e6";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";
    $status=$status+1;
    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = "$mobileNumber"; // A single number or a comma-seperated list of numbers
    $message = urlencode("Your OTP is : ".$otp);
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    }
    $_SESSION['otp9']=$otp;
    header("Location: verify.php?status=otpsent");
    exit();

}else {
  header("Location: verify.php?error=otpnotsent");
  exit();
}
 ?>
