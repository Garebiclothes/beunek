<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "contact@dpunek.in";

mail($recipient, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<div class=thankyoucontent>
<div class="wrapper-1">
  <div class="wrapper-2">
    <img src="https://i.ibb.co/Lkn7rkG/thank-you-envelope.png" alt="thank-you-envelope" border="0">
    <h1>Thank you!</h1>
    <p>for contacting us, we will reply promptly</p>
    <p>once your message is received. </p>
    <button class="go-home"><a href="https://dpunek.in">
        home page</a>
    </button>
  </div>

</div>
</body>
</html>



';


?>
