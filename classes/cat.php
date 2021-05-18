<?php

class Cat extends Pet
{

    function scratch()
    {
        echo "{$this->getName()} will scratch you and your couch<br>";
    }

}