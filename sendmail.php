<?php
$to			= 'libtheross@gmail.com';
$subject	= 'Infoworkz Contact Form';
$message	= "Name: ".$_POST['name']."\r\nCompany: ".$_POST['company']."\r\nBusiness: ".$_POST['business']."\r\nWebsite: ".$_POST['website']."\r\nEmail: ".$_POST['email']."\r\nAddress: ".$_POST['address']."\r\nCity: ".$_POST['city']."\r\nState: ".$_POST['state']."\r\nZip: ".$_POST['zip']."\r\nPhone: ".$_POST['phone'];
$headers	= 'From: ' . $_POST['email'] . "\r\n" .
'Reply-To: ' . $_POST['email'] . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: thankyou.php');
?>