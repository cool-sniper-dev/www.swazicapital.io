<?php
//get data from form  
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phoneNumber'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "bongani@swazicapital.co.za";
$subject = "Mail From Swazi Capital Website";
$txt ="Name = ". $name   ."\r\n Surname = " .$surname  ."\r\n Phone Number = " .$phone ."\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>