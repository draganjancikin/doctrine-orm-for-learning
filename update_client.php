<?php
// update_client.php <id> <new-name>
require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$client = $entityManager->find('App\\Entity\\Client', $id);

if ($client === null) {
    echo "Client $id does not exist.\n";
    exit(1);
}

$client->setName($newName);

$entityManager->flush();