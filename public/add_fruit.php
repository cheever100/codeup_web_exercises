<?php

// Defined the class.
class Person
{
// Defined the properties.
    public $firstName;
    public $lastName;
    public $fruit = array();

// Declared the method as 'roamCountryside()'
    public function roamCountryside()
    {
        $distance = mt_rand(1, 10);

        return $this->firstName . " walks {$distance} miles west.";
    }

// Declared the method as 'qeeFruit()'
    public function addFruit($fruit)
    {
        $this->fruit[] = $fruit;
    }
}

// Called the method
$john->addFruit('Arctic');

// Set class properties.
$person->firstName = 'Johnny';
$person->lastName  = 'Appleseed';
$person->fruit     = array('Pink Lady', 'Gala', 'Fuji');