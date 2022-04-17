<?php
$name = $_POST['name'];

$email = $_POST['email'];

//$subject = $_POST['subject'];

$message = $_POST['message'];

$email_from = 'KanTech Solution';
$email_subject = 'Nouveau Message de KanTech';

$email_body = "Name: $name.\n".
        "Email: $email.\n".
        "Subject: $message.\n";

$to = "doumbia_fabou@bat.com";
$headers = "from: $email_from \r\n";
$headers .= "Reply-to : $email \r\n";

mail($to,$email_subject,$email_from,$headers);

header("Location: index.html");

?>