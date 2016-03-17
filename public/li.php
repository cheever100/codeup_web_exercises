<?php
// Define the class.
class Li
{
// Define the properties.
    public $tag = 'li';
    public $htmlAttributes = [];
    public $content = '';

// Declare 'asHtml() as the 'method'.
    public function asHtml()
    {
        return "<{$this->tag}>{$this->content}</{$this->tag}>";
    }
}