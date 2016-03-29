<?php
class Input
{
    
// Check if a given value was passed in the request
// param string $key index to look for in request
// return boolean whether value exists in $_POST or $_GET
     
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }


// get a requested value from either $_POST or $_GET
// param string $key index to look for in index
// param mixed $default default value to return if key not found
// return mixed value passed in request

    public static function get($key, $default = null)
    {
        $result = self::has($key) ? $_REQUEST[$key] : $default;
        return $result;    
    }
  
    private function __construct() 
    {

    }

    public static function getString($key)
    {
    	$value = self::get($key);

    	// Check if value is a string
    	if (($value == null || is_resource($value)) || 
    	 (is_numeric($value)) || (is_bool($value)) ||
    	 (is_array($value)) || (is_object($value))) 

    	{
        	throw new Exception('$key is not a string or is null!');
    	}
    		$this->key = trim($key);
    }

    public static function getNumber($key)
    {
    	$value = self::get($key);

    	// Check if value is a number
    	if (!is_numeric($value) || $value == null)
    	{
        	throw new Exception('$key is not a number or it is null!');
    	}
    		return (float) $value;
    }

     public static function getDate($key)
    {
    	$value = self::get($key);
    	$validDate = date_create($value);

    	// Check if value is a date
    	if ($validDate)
    	{
    		return $value;
    	} else {
    		throw new Exception('The input provided is not a valide date format');
    	}
    }



}

