<?php

// Declared a class called 'Person'
class Person
{
// Declared three properties    
    public $firstName;
    public $lastName;
// Assigned $fruit the value of an empty array 
    public $fruit = array();

// Declared 'roamCountryside()' as a method.
    function roamCountryside()
    {
        $distance = mt_rand(1, 10);
        return "Walking {$distance} miles west.";
    }
}

// Created a new class instance.
	$person = new stdClass();

// Set class properties.
$person->firstName = 'Johnny';
$person->lastName  = 'Appleseed';
$person->fruit     = array('Pink Lady', 'Gala', 'Fuji');

// Created a new class instance.
	$john = new Person();

// Set class properties.
$john->firstName = 'Johnny';
$john->lastName  = 'Appleseed';
$john->fruit     = array('Braeburn', 'Golden Delicious', 'Honeycrisp');

// Outputed 'roamCountryside()'.
	echo $person->roamCountryside() . PHP_EOL;

// Outputed 'roamCountryside()'.
	echo $john->roamCountryside() . PHP_EOL;
