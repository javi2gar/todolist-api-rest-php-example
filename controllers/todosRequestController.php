<?php
require '../vendor/autoload.php';
require_once '../models/todo.php';

$URL = 'https://jsonplaceholder.typicode.com/todos';
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', $URL);

// $response->getBody()->getContents() devuelve un string con todos las tareas
// que no se puede pueden iterar. La función json_decode() se le pasa como 
// argumento un array y devuelve un objeto iterable en PHP.
$todos_as_string = $response->getBody()->getContents();   // String
$todos_as_object_it = json_decode($todos_as_string,true); // Array

//echo gettype($todos_as_string)."<br>";
//echo gettype($todos_as_object_it)."<br>";

$todos = $todos_as_object_it;

// Contiene el listado de tareas asociado a un usuario
$todosList = array();

foreach ($todos as $todo) {
	
	$userId = $todo['userId'];
	$id = $todo['id'];
	$title = $todo['title'];
	$completed = $todo['completed'];

	$todo = new Todo($userId, $id, $title, $completed);		
	
	array_push($todosList, $todo);
	
}

//var_dump($todosList);
