<?php

$message = "";
if ($_POST) {
    $message = "Name: " . $_POST['name'] . "\r\n";
    $message .= "Phone: " . $_POST['phone'] . "\r\n";
    $message .= "Email: " . $_POST['email'] . "\r\n";
    $message .= "Subject: " . $_POST['subject'] . "\r\n";
    $message .= "Message: " . $_POST['message'] . "\r\n";
    $message = wordwrap($message, 70, "\r\n");
}
mail('henry@tr130.co.uk', 'contact form', $message);

header('Location: https://tr130.co.uk#contact');
