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
}