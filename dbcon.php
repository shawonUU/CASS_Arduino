<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Firebase\Auth\Token\Exception\InvalidToken;
use Firebase\Auth\Token\Exception\IssuedInTheFuture;

//use Throwable;

$factory = (new Factory)
    ->withServiceAccount('cass-arduino-firebase-adminsdk-qawoq-15d76c8b88.json')
    ->withDatabaseUri('https://cass-arduino-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();
?>