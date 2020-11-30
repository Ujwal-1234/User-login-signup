<?php
  require "header.php";
if(isset($_POST['forget'])){
  echo'<form action="getotp.php" method="post"><input type="text" name="number" placeholder="OTP.."><br>
        <button type="submit" name="number-submit">GET_OTP</button></form>';
}

?>
