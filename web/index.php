<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email("SmtpDebug", "yourHost", "yourUser", "yourPassword", "tls", 'yourPort',
    "your@email.com", "yourName");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>test</b></p>", "your@email.com", "yourName", "address@email.com", "name of who will receive");

var_dump($novoEmail);



