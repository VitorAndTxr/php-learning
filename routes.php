<?php 

$router->define([
	"" => 'controllers\index.php',
	'contact' => 'controllers\contact.php',
	'about' => 'controllers\about.php',
	'about/culture' => 'controllers\about-culture.php',
	'names' => 'controllers/add-name.php'
]);

$router->get('','controllers/index.php');
$router->get('contact','controllers/contact.php');
$router->get('about','controllers/about.php');
$router->get('about/culture','controllers/about-culture.php');
$router->post('names','controllers/add-name.php');