<?php
session_start();

    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'assets/vendor/autoload.php';
require_once "assets/vendor/phpmailer/phpmailer/src/PHPMailer.php";
require_once "assets/vendor/phpmailer/phpmailer/src/Exception.php";
require_once "assets/vendor/phpmailer/phpmailer/src/SMTP.php";
   

if(isset($_POST['name'])&&isset($_POST['email']) &&isset($_POST['subject']) &&isset($_POST['message']))
  {
          $name = $_POST['name'];
          $email= $_POST['email'];
          $subject= $_POST['subject'];
          $message= $_POST['message'];
    
    
    
    
    
    

                    $mail = new PHPMailer(); // create a new object
                    $mail->IsSMTP(); // enable SMTP
                    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
                    $mail->SMTPAuth = true; // authentication enabled
                    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                    $mail->Host = "mail.tathva.org";
                    $mail->Port = 465; // or 587
                    $mail->IsHTML(true);
                    $mail->Username = "noreply@locus19.org";
                    $mail->Password = "OATmAMhb=DUo";
                    $mail->SetFrom("noreply@locus19.org");
                    $mail->Subject = $subject;
                    $mail->Body = "
                    From $name <br>
                    $email <br>
                    <br>
                    $message
                    
                ";
                   $mail->AddAddress("clubmath@nitc.ac.in");
     //$mail->AddAddress("vrindhak17@gmail.com");

                     if(!$mail->Send()) 
                     {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                         //echo "  <script>window.location.href='index.php?msg=error'; </script>";
                     } 
                    else {
                        echo "Message has been sent";
                     }








                    echo "  <script>window.location.href='index.php?msg=sent'; </script>";


}




    
?>
