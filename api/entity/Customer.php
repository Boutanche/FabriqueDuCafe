<?php
class Customer implements JsonSerializable {
    public $id;
    public $name;

    public function jsonSerialize()
    {
        return array(
            'id'=>$this->id,
            'name'=>$this->name,
        );
    }
}