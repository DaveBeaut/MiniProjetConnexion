<?php

require dirname(__FILE__) . "/controleur/configRacine.php";

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_GET["action"])) {
	$action = $_GET["action"];
}

