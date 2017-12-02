<?php

require __DIR__  .'/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de email", "<p><b>email de teste</b></p>", "contato.lvg@hotmail.com", "Leonardo Netto", "webvendedor@yahoo.com.br", "Leonardo");

var_dump($novoEmail);

