<?php

class Panda 
{

// Properties
	var $coat = 'fluffy';
	var $colour;

// Method
	 function getCoat()
	 {
	 return $this->coat; 
	 }

// Method
	function getColour()
	{
	 return $this->colour;
	}
}

class GiantPanda extends Panda 
{
// Create a new giant panda instance. 
	$giantPanda = new GiantPanda;
}

// Get coat type.
	echo $giantPanda->getCoat();	

