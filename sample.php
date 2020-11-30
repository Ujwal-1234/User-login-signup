<?php
   $from = "kujwal147@gmail.com"; // sender
   $subject = " My system working";
   $message = "My first mail  :)";

   // message lines should not exceed 70 characters (PHP rule), so wrap it

   $message = wordwrap($message, 70);6

   // send mail

   ini_set("SMTP","localhost");
   ini_set("smtp_port","25");
   ini_set("sendmail_from","kujwal147@gmail.com");
   ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");

   mail("ujwalkumarmahatohcs41@gmail.com",$subject,$message,"From: $from\n");

   //echo "Thank you for sending us feedback";

?>
