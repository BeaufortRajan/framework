<?php
// chargement de l'autoload de composer
require_once __DIR__ ."/../vendor/autoload.php";

// chargement des variable
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));

$dotenv->load();

// Chargement du conteneur de dépendances
$container = require_once __DIR__ . "/dependenciesInjection/container.php";

