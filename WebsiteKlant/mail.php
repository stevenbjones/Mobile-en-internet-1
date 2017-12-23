<?php
$to      = 'stevenbjones@hotmail.com';
$subject = $_POST['Onderwerp'];
$message = $_POST['Vraag'];
$headers = 'From: $_POST['Email']' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>