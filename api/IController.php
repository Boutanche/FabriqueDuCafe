<?php

/**
 * Interface d'un controller.
 */
interface IController {
	/**
	 * Détermine si ce controller gère la requête.
	 */
	public function accept($requestPath) : bool;
	
	/**
	 * Dispatch la requête à ce controller.
	 */
	public function dispatch($requestPath, $requestParams);
}