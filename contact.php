<?php
//get data from form  

$name = $_POST['name'];
$name2 = $_POST['name2'];
$email= $_POST['email'];
$message= $_POST['message'];
$numb= $_POST['number'];

$to = "umarwazir297@gmail.com";
$subject = "Mail From Poiesis";
$txt ="FName = ". $name . "\r\nLname = " . $name2 . "\r\nEmail = " . $email . "\r\nMessage =" . $message. "\r\nPhone =" . $numb;
$headers = "From: poiesistech@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>