<?php

require_once (__DIR__ . '/../repository/CustomerRepository.php');

/**
 * Service de gestion des Customer.
 *
 * @author MATHIEU.JUDDE
 */
class CustomerService {
    private static $INSTANCE = null;
    
    /**
     * Reposiotry de gestion des Customer.
     */
    private $customerRepository;
    
    /**
     * Constructeur privé.
     * Initialise le reposiotry de gestion des Customer.
     */
    private function __construct() {
        $this->customerRepository = CustomerRepository::getInstance();
    }
    
    /**
     * Retourne l'instance unique de CustomerService.
     * @return CustomerService l'instance unique.
     */
    public static function getInstance() : CustomerService {
        if(self::$INSTANCE == null) {
            self::$INSTANCE = new CustomerService();
        }
        return self::$INSTANCE;
    }
    
    /**
     * Retourne le Customer qui correspond à l'ID.
     * @param int $id l'id du Customer.
     * @return Customer le Customer qui correspond à l'id.
     */
    public function getById($id) : Customer {
        return $this->customerRepository->getById($id);
    }

    /**
     * Retourne tous les Customer
     * @return AllCustomers tous les Customers
     */
    public function getAll() : AllCustomers {
        return $this->customerRepository->getAll();
    }
}