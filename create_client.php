<?php
// create_client.php <name>
require_once "bootstrap.php";

use App\Entity\Client;

$newClientName = $argv[1];

$client = new Client();
$client->setName($newClientName);

$entityManager->persist($client);
$entityManager->flush();

echo "Created Client: " .$client->getName(). ", with ID " . $client->getId() . "\n";
