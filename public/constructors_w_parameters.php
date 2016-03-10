<?php

// Defined the Panda class.
 class Panda
 {
// Declared '$loudName' as a property.
 	 public $loudName;

 // used the '__construct()' method to set the initial value.
 // included '$name' as parameter.
	 function __construct($name)
	 {
	 $this->loudName = $this->makeNameLoud($name);
	 }

// Declared 'makeNameLoud()' as a "method".
// '$name'parameter passed from __construct method 
	 function makeNameLoud($name)
	 {
	 return strtoupper($name);
	 }
 }

// Creates a new class instance.
	$panda = new Panda('Lushui');

// Outputed 'loudName'.
	echo $panda->loudName . PHP_EOL;

// Created a new class instance.
	$secondPanda = new Panda('Pali');

// Output loud name.
	echo $secondPanda->loudName . PHP_EOL;