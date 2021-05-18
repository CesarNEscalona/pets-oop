<?php

// This is my controller for the pets-oop project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');


// Start a session
// session_start();

// Instantiate Fat-Fre
$f3 = Base::instance();

// Define default route
$f3->route('GET /', function(){
    echo "<h1>Hello Pets!</h1>";

    // Instantiate a pet onj
    $pet1 = new Pet("Blackie", "Blue");
    $pet2 = new Pet("Fido", "White");
    $pet2->setName("Tubby");
    // Test setters and getters
    echo $pet2->getName();
    echo"<br>";
    echo $pet2->getColor();
    echo"<br>";
    $pet2->setColor("Black");
    echo $pet2->getColor();

    echo "<pre>";
    var_dump($pet1);
    echo "</pre>";

    // Invoke the eat method
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();

    $dog1 = new Dog("Riley", "Brown");
    // var_dump($dog1);
    $dog1->fetch();
    $dog1->eat();
});

// Run Fat-Free
$f3->run();