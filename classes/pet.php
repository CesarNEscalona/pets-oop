<?php

/**
 * Pet Class
 * Represents a pet object with name and color
 * @author Cesar Escalona
 * @copyright 2021
 */
class Pet
{
    private $_name;
    private $_color;

    /**
     * Pet constructor.
     * @param String $name The pet's name, default unknown
     * @param String $color The pet's color, default unknown
     */
    function __construct($name="Unknown", $color="Unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    /**
     * getName() function
     * @return String $name The pet's name
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * setName() function
     * @param String $name The pet's name
     * @return void
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * getColor() function
     * @return String $name The pet's color
     */
    function getColor()
    {
        return $this->_color;
    }

    /**
     * setColor() function
     * @param String $name The pet's color
     * @return void
     */
    function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * eat() function
     * @return Prints out the pets name and what it's doing
     */
    function eat()
    {
        echo $this->_name . " is eating<br>";
    }

    /**
     * talk() function
     * @return Prints out the pets name and what it's doing
     */
    function talk()
    {
        echo $this->_name . " is barking<br>";
    }

    /**
     * sleep() function
     * @return Prints out the pets name and what it's doing
     */
    function sleep()
    {
        echo $this->_name . " is sleeping<br>";
    }
}