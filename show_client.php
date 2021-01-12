<?php
// show_client.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$client = $entityManager->find('App\\Entity\\Client', $id);

if ($client === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $client->getName());