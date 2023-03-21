<?php

require dirname(__FILE__) . "/controleur/configRacine.php";

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_GET["action"])) {
	$action = $_GET["action"];
}

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();