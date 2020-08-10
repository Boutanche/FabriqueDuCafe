<?php
class Customer implements JsonSerializable {
    public $id;
    public $firstName;
    public $lastName;
    
    public function jsonSerialize()
    {
        return array(
            'id'=>$this->id,
            'firstName'=>$this->firstName,
            'lastName'=>$this->lastName,
        );
    }
}