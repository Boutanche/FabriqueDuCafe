<?php

require_once (__DIR__ . '/../entity/Customer.php');

/**
 * Reposiotry de gestion des Customer.
 * 
 * @author MATHIEU.JUDDE
 */
class CustomerRepository {
    /**
     * Instance uniqte.
     */
    private static $INSTANCE = null;
    
    /**
     * Retourne l'instance unique de CustomerRepository.
     * @return CustomerRepository l'instance unique.
     */
    public static function getInstance() : CustomerRepository {
        if(self::$INSTANCE == null) {
            self::$INSTANCE = new CustomerRepository();
        }
        return self::$INSTANCE;
    }
    
    /**
     * Retourne le Customer qui correspond à l'ID.
     * @param int $id l'id du Customer.
     * @return Customer le Customer qui correspond à l'id.
     */
    public function getById(int $id) : Customer {
        $bddMathieu = new PDO(
            'mysql:host=localhost:3308;dbname=lafabriqueducafe_fidel;chartset=utf8mb4_roman_ci',
            'lafabriqueducafe_stage',
            'Lisa9915@2isa');
        
        $req_AllCustomers = $bddMathieu->query("SELECT * FROM customer where id = " . id);
        if($line = $req_AllCustomers->fetch()) {
            $customer = new Customer();
            $customer->id = $line['id_customer'];
            $customer->id = $line['id_customer'];
            return $customer;
        } else {
            return null;
        }
    }

    /**
     * Retourne tous les Customer
     * @return array tous les Customers
     */
    public function getAll() : array {
        $bddMathieu = new PDO(
            'mysql:host=localhost:3308;dbname=lafabriqueducafe_fidel;chartset=utf8mb4_roman_ci',
            'lafabriqueducafe_stage',
            'Lisa9915@2isa');
        $customers = array();
        $req_AllCustomers = $bddMathieu->query("SELECT * FROM customer");
        $customers= array();
        while ($customer_line = $req_AllCustomers->fetch()){
            $customer = new Customer();
            $customer->id = $customer_line['id_customer'];
            $customer->id = $customer_line['id_customer'];

            $customers[] = $customer;
        }
        return $customers;
    }
}