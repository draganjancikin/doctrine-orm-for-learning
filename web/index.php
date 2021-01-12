<?php
require_once "../bootstrap.php";

$clientRepository = $entityManager->getRepository('App\\Entity\\Client');
$clients = $clientRepository->findAll();
echo "<h1>Početna</h1>";
echo "<h2>Klijenti</h2>";
foreach ($clients as $client) {
    echo sprintf("- %s <br>", $client->getName());
}