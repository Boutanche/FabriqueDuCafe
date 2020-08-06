<?php

require_once("IController.php");

/**
 * Classe FrontController.
 * S'occupe de dispatcher les requêtes HTTP au bon controller.
 * Retourne une erreur 404 si auccun controller trouvé.
 */
class FrontController {
	/**
	 * La liste des controllers enregistrés.
	 */
	private $controllers;
	
	/**
	 * Constructeur.
	 * Initialise un tableau de IController vide.
	 */
	public function __construct() {
		$this->controllers = array();
	}
	
	/**
	 * Enregistre un controller.
	 */
	public function registerController(IController $controller) {
		$controllers[] = $controller;
	}
	
	/**
	 * Dispatch la requête au controller qui va la gérer, ou retourne une erreur 404.
	 */
	public function dispatch($requestPath, $requestParams) {
		foreach ($this->controllers as $controller){
			if($controller.accept($requestPath)) {
				// Dispatch au controller.
				$responseBody = $controller->dispatch($requestPath, $requestParams);
			}
		}
		
		$this->send404($requestPath);
	}
	
	/**
	 * Renvoie une erreur 404.
	 */
	private function send404($requestPath) {
		http_response_code(404);
		echo 'Pas de controller trouvé pour ' . $requestPath;
		die();
	}
}