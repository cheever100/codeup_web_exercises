<?php

// CLASS CODE:
class Panda 
{

// Properties
	public $coat = 'fluffy';
	public $color;

// Coat Method
	 public function getCoat()
	 {
	 return $this->coat; 
	 }

// Color Method
	public function getColor()
	{
	 return $this->color;
	}
}

// PROCEDURAL CODE:
 // Create a new instance.
	$panda = new Panda;

// Change the value of properties.
 	$panda->color = 'red';

// Execute the coat method.
	echo $panda->getCoat() . PHP_EOL;
	echo $panda->getColor() . PHP_EOL;


// extend the class
class GiantPanda extends Panda
{

}
// Create a new instance.
$giantPanda = new GiantPanda;

// get coat type
echo $giantPanda->getCoat() . PHP_EOL;





