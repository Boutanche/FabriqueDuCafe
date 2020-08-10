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
        // Si l'url commence par /api/customers
        $index = strpos($requestPath, '/customers');
        if($index !== false){
            return true;
        } else {
            return false;
        }
    }
    
    public function dispatch($requestPath, $requestParams) {
        
        if($requestPath == '/customers/get-by-id'){
            // Dispatcher sur la bonne méthode.
            // TODO[MJU] On verra plus tard.
            $responseBody = $this->getByID($requestParams);
        } else if($requestPath == '/customers/get-all') {
            $responseBody = $this->getAll($requestParams);
        }
        
        if(isset($responseBody)) {
            // Ecrire le résultat dans la réponse HTTP au format JSON.
            header('Content-Type: application/json');
            http_response_code(200); // OK
            echo json_encode($responseBody);
        } else {
            $this->send404($requestPath);
        }
    }

    private function getByID($requestParams) : Customer {
        $customer = $this->customerService->getById($requestParams['id']);
        return $customer;
    }

    private function getAll() : array {
        $allCustomers = $this->customerService->getAll();
        return $allCustomers;
    }

    /**
     * Renvoie une erreur 404.
     */
    private function send404($requestPath) {
        http_response_code(404);
        echo 'Pas de controller trouvé pour ICI ' . $requestPath;
        die();
    }
    
}