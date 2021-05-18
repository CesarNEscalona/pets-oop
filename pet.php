<?php

// pet.php

class Pet
{
    private $_name;
    private $_color;

    // Default constructor
    function __construct($name="Unknown", $color="Unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo $this->_name . " is eating.<br>";
    }

    function talk()
    {
        echo $this->_name . " is barking<br>";
    }

    function sleep()
    {
        echo $this->_name . " is sleeping<br>";
    }
}