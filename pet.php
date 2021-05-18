<?php

// pet.php

class Pet
{
    private $_name;
    private $_color;

    function eat()
    {
        echo "Pet is eating<br>";
    }

    function talk()
    {
        echo "Pet is barking<br>";
    }

    function sleep()
    {
        echo "Pet is sleeping<br>";
    }
}