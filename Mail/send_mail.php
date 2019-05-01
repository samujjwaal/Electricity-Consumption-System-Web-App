<?php
    session_start();
    $mailto = $_SESSION["emailid"];
    $mailSub = "ALERT...!!";
    $mailMsg = "Hi..! We are from ECS org..! This is demo alert..!";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sprdhsags@gmail.com";
   $mail ->Password = "sprdh123";
   $mail ->SetFrom("sprdhsags@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

