<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b></p>", "macielsalzano2@gmail.com", "Maciel Salzano", "macielsalzano@gmail.com", "Maciel_S");

var_dump($novoEmail);



