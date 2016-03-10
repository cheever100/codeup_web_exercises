<?php

 // Defined the Panda class.
 	class Panda
 	{
 // Declared $loudName as a property.
 	public $loudName;

 //  used the '__construct()' method to set the initial value.
 	function __construct()
 	{
 		$this->loudName = $this->makeNameLoud('Lushui');
 	}

// Declared 'makeNameLoud()' as a "method".
 	function makeNameLoud($name)
 	{
 		return strtoupper($name);
 	}
 }

// Created a new class instance.
	$panda = new Panda;

// Output loud name.
	echo $panda->loudName . PHP_EOL;