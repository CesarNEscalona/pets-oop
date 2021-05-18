<?php

// This is my controller for the Dating project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');

// Require the pet class
require('pet.php');

// Start a session
// session_start();

// Instantiate Fat-Fre
$f3 = Base::instance();

// Define default route
$f3->route('GET /', function(){
    echo "<h1>Hello Pets!</h1>";

    // Instantiate a pet onj
    $pet1 = new Pet("Blackie", "Blue");

    // Invoke the eat method
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();
});

// Run Fat-Free
$f3->run();