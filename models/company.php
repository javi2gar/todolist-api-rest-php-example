<?php
class Company{
  
    private $name;
    private $cacthPhrase;
    private $bs;

    public function __construct($name, $cacthPhrase, $bs){
        $this->name = $name;
        $this->cacthPhrase = $cacthPhrase;
        $this->bs = $bs;
    }

    public function __get($property){
        return $this->$property;
    }
}
?>