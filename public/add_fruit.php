<?php

// Defined the class.
class Person
{
// Defined the properties.
    public $firstName;
    public $lastName;
    public $fruits = array();

// Declared the method as 'roamCountryside()'
    public function roamCountryside()
    {
        $distance = mt_rand(1, 10);

        return $this->firstName . " walks {$distance} miles west.";
    }

// Declared the method as 'addFruit()'
    public function addFruit($fruit)
    {
        $this->fruits[] = $fruit;
    }
}

// Created a new class instance.
    $person = new Person;

// Set class properties.
$person->firstName = 'Johnny';
$person->lastName  = 'Appleseed';
$person->fruits     = array('Pink Lady', 'Gala', 'Fuji');
$person->addFruit('honeycrisp');

var_dump($person->fruits);

echo $person->roamCountryside() . PHP_EOL;