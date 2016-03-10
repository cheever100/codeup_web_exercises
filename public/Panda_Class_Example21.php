<?php

// Defined the class.
	class Example
	{
// First function.
	function first()
		{
		return $this->second();
		}
// Second function.
		function second()
		{
		return $this->third();
		}
// Third function.
		function third()
		{
		return "Well that was rather pointless, wasn't it?";
		}
	}