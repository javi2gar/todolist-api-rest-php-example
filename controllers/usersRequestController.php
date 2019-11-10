<?php
require '../vendor/autoload.php';
require_once '../models/user.php';

$URL = 'https://jsonplaceholder.typicode.com/users';
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', $URL);

// $response->getBody()->getContents() devuelve un string con todos los usuarios
// que no se puede pueden iterar. La función json_decode() se le pasa como 
// argumento un array y devuelve un objeto iterable en PHP.
$users_as_string = $response->getBody()->getContents();   // String
$users_as_object_it = json_decode($users_as_string,true); // Array

//echo gettype($users_as_string)."<br>";
//echo gettype($users_as_object_it)."<br>";

$users = $users_as_object_it;


// Contiene el listado de tareas asociado a un usuario
$userList = array();

foreach ($users as $user) {
	
	$id = $user['id'];
	$name = $user['name'];
	$username = $user['username'];
	$email = $user['email'];
	$addresStreet = $user['address']['street'];
	$addresSuite = $user['address']['suite'];
	$addresCity = $user['address']['city'];
	$addresZipcode = $user['address']['zipcode'];
	$addresGeoLat = $user['address']['geo']['lat'];
	$addresGeoLng = $user['address']['geo']['lng'];
	$phone = $user['phone'];
	$website = $user['website'];
	$companyName = $user['company']['name'];
	$companyCatchPhrase = $user['company']['catchPhrase'];
	$companyBs = $user['company']['bs'];

	$user = new User($id, $name, $username, $email, $addresStreet, $addresSuite, $addresCity, 
		$addresZipcode, $addresGeoLat, $addresGeoLng, $phone, $website, $companyName,
			$companyCatchPhrase, $companyBs);		
	
	array_push($userList, $user);
	
}

//var_dump($userList);
