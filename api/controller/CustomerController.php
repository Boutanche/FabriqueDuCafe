<?php
require_once (__DIR__ . '/../entity/Customer.php');
require_once (__DIR__ . '/../service/CustomerService.php');
require_once (__DIR__ . '/../IController.php');

/**
 * Le Controller de gestion des Customer.
 * @author MATHIEU.JUDDE
 *
 */
class CustomerController implements IController {
    
    /**
     * Le service de gestion des Customer.
     */
    private $customerService;
    
    /**
     * Constructeur privé.
     * Initialise le service de gestion des Customer.
     */
    function __construct() {
        $this->customerService = CustomerService::getInstance();
    }
    
    /**
     * {@inheritDoc}
     * @see IController::accept()
     */
    public function accept($requestPath) : bool
    {
        // TODO[BIBI] Retourner true si $requestPath == /customers;
        return true;
    }
    
    public function dispatch($requestPath, $requestParams) {
        // Dispatcher sur la bonne méthode.
        // TODO[MJU] On verra plus tard.
        $responseBody = $this->getByID($requestParams);
        
        // Ecrire le résultat dans la réponse HTTP au format JSON.
        header('Content-Type: application/json');
        http_response_code(200); // OK
        echo json_encode($responseBody);
    }

    private function getByID($requestParams) : Customer {
        $customer = $this->customerService->getById($requestParams['id']);
        return $customer;
    }


    
}