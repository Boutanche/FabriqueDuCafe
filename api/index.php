<?php
session_start();

require_once("FrontController.php");

$requestPath = $_SERVER['REDIRECT_ORIGINAL_PATH'];
$requestParams = $_GET;

// Initialiser le FrontController.
$frontController = new FrontController();

// Enregistrrer les controllers.
// $frontController.register(new XXXController());

// Dispatcher la requête.
$frontController->dispatch($requestPath, $requestParams);