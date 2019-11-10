<?php

require_once 'address.php';
require_once 'geo.php';
require_once 'company.php'; 

class User{
    
    private $id;
    private $name;
    private $username;
    private $email;
    private $address;    
    private $phone;
    private $website;
    private $company;
    private $portraitsProfile;  
    private $portraitsThumbnail;
 
    public function __construct($id, $name, $username, $email, $addressStreet, $addressSuite, $addressCity, 
        $addressZipcode, $addressGeoLat, $addressGeoLng, $phone, $website, $companyName, $companyCatchPhrase, $companyBs){
       
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->address = new Address($addressStreet, $addressSuite, $addressCity, $addressZipcode, $addressGeoLat, $addressGeoLng);        
        $this->phone = $phone;
        $this->website = $website;
        $this->company =  new company($companyName, $companyCatchPhrase, $companyBs);
        $this->portraitsProfile = "https://randomuser.me/api/portraits/women/".$id.".jpg";
        $this->portraitsThumbnail = "https://randomuser.me/api/portraits/thumb/women/".$id.".jpg";
    }

    public function __get($property){
        return $this->$property;
    }
}
?>