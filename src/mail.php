<?php

$frm_name  = "Youname";
$recepient = "mailadress@ml.com";
$sitename  = "Название Сайта";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

$messageToSend = "
E-mail: $email <br>
Имя: $name <br>
Сообщение: $message
";

mail($recepient, $subject, $messageToSend, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
