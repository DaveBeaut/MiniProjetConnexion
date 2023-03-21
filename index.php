<?php

require dirname(__FILE__) . "/controleur/configRacine.php";

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_GET["action"])) {
	$action = $_GET["action"];
}

//Ajoute un controleur secondaire ($fichier) en fonction du metier ($action) :
// $fichier = redirigeVers($action);

require RACINE . "/controleur/" . $fichier;

echo 'test';
echo 'toto';
echo 'test';
