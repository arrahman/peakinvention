<?php

$to = "ubel100@gmail.com";
$subject = "Inquery";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: rubel100@gmail.com";

mail($to,$subject,$txt,$headers);

echo 'Thank you for sending email. We will get back to you soon.';
?>