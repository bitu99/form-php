<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "newakpandey@gmail.com";
$subject = "Mail from website";

$headers = "From: ".$name."\r\n"."CC: ap2695679@gmail.com";

$txt = "You have received an email from ".$name."\r\nEmail: ".$email."\r\nMessage: ".$message;

if($email!=NULL){
    mail($to, $subject, $text, $headers);
}

header('Location:thankyou.html')

?>
