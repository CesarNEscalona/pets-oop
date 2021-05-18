<?php

class Cat extends Pet
{
    private $_name;

    function __construct($name = "Unknown")
    {
        $this->$name = $name;
    }

    function eat()
    {
        echo $this->_name . " is purring<br>";
    }

    function scratch()
    {
        echo $this->_name . " will scratch you and your couch";
    }


}