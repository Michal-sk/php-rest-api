<?php

require_once(__DIR__ . '/../autoload.php');

$messageBird = new \MessageBird\Client(getenv('MESSAGEBIRD_API_KEY')); // Set your own API access key here.

try {
    $partnerAccountResult = $messageBird->partnerAccounts->read(1);
    var_dump($partnerAccountResult);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\Exception $e) {
    echo $e->getMessage();
}
