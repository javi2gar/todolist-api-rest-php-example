<?php

require_once 'geo.php';

class Address{
  
    private $street;
    private $suite;
    private $city;
    private $zipcode;
    private $geo;
     
    public function __construct($street, $suite, $city, $zipcode, $geoLat, $geoLng){
        $this->street = $street;
        $this->suite = $suite;
        $this->city = $city;
        $this->zipcode = $zipcode;
        $this->geo = new Geo ($geoLat, $geoLng);
    }

    public function __get($property){
        return $this->$property;
    }
}
?>