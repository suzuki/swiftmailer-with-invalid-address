<?php

require_once './vendor/autoload.php';
require_once './Swift_Mime_Grammar.php';

$message = Swift_Message::newInstance()
         ->setSubject('test')
         ->setFrom(['norio.suzuki@zatsubun.com' => 'Norio Suzuki'])
         ->setTo(['norio.suzuki.@gmail.com']) // Invalid Address
         ->setBody('test')
         ;

$transport = Swift_NullTransport::newInstance();
$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message);