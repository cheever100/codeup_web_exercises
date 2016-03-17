<?php

// Define the class.
class Ul
{

// Define the properties.
    public $tag = 'ul';
    public $htmlAttributes = [];
    public $listItems = [];

// Declare 'addItem()' as the 'method'.
// 
    public function addItem(Li $item)
    {
// Add $item to the '$listItems' array
        array_push($this->listItems, $item);
    }
// Declare 'asHtml()' as the 'method'.    
    public function asHtml()
    {
// Define the variable '$html' 
        $html = "<{$this->tag}>";
/** @var Li $listItem */
// For each item in the array, 
        foreach ($this->listItems as $listItem) {
            $html .= $listItem->asHtml();
        }

        $html .= "</{$this->tag}>";
        return $html;
    }
}