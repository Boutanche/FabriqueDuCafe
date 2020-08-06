<?php
session_start();

require_once("FrontController.php");
require_once("controller/CustomerController.php");

$requestPath = $_SERVER['REDIRECT_ORIGINAL_PATH'];
$requestParams = $_GET;

$customerController = new CustomerController();
// Initialiser le FrontController.
$frontController = new FrontController();

// Enregistrrer les controllers.
$frontController->registerController($customerController);

// Dispatcher la requête.
$frontController->dispatch($requestPath, $requestParams);