<?php

// Define the Panda class.  
	class Panda
	{

// LOUD NAME PROPERTY
 	 var $loudName;

// Contructor method.
	 function __construct($name)
	    {
	        $this->loudName = $this->makeNameLoud($name);
	    }

// NAME LOUDENING METHOD
	function makeNameLoud($name)
		{
			return strtoupper($name);  
		}
	}

// // Create a new class instance. 
// 	$panda = new Panda;

// // Output loud name.
// 	echo $panda->loudName . PHP_EOL;

// Create a new class instance. 
	$panda = new Panda('Lushui');

// Output loud name.
	echo $panda->loudName . PHP_EOL;

// Create a new class instance.
	$secondPanda = new Panda('Pali');

// Output loud name.
	echo $secondPanda->loudName . PHP_EOL;