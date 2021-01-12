<?php
// list_clients.php
require_once "bootstrap.php";

$clientRepository = $entityManager->getRepository('App\\Entity\\Client');
$clients = $clientRepository->findAll();

foreach ($clients as $client) {
    echo sprintf("-%s\n", $client->getName());
}