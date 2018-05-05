<?php
// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","mail.example.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'info@snowcityblr.com');

$to      = 'vasim143s@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: info@snowcityblr.com' . "\r\n" .
    'Reply-To: info@snowcityblr.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 