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
        
        // TODO[BIBI] Remplacer la valeur en dur par :
        // - Appel à la base de données
        // - Transformation du retour de la requête en objet Customer.
        $customer = new Customer();
        $customer->id = $id;
        $customer->name ="Customer N°" . $id;
        return $customer;
    }

    /**
     * Retourne tous les Customer
     * @return AllCustomers tous les Customers
     */
    public function getAll() : AllCustomers {
        $bddMathieu = new PDO(
            'mysql:host=localhost:3308;dbname=lafabriqueducafe_fidel;chartset=utf8mb4_roman_ci',
            'lafabriqueducafe_stage',
            'Lisa9915@2isa');
        $allCustomers = new AllCustomers();
        $req_AllCustomers = $bddMathieu->query("SELECT * FROM customer");
        $allCustomers= array();
        while ($data_card = $req_AllCustomers->fetch()){
            $ar_all_card[$data_card['id_customer']]= $data_card;
        }
        return $allCustomers;
    }
}