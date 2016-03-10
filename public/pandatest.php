<?php
// PROCEDURAL CODE
require_once "pandaclass.php";
// Created first new book instance.
$book = new Book;

// Set properties 
// $book is object; title is property (variable on an object); 'Game of Thrones' is the value assigned on this property on this object.
$book->title = 'Game of Thrones';
$book->author = 'George R R Martin';
$book->publisher = 'Voyager Books';
$book->yearOfPublication = 1996;


// Created second new book instance.
$second = new Book;

// Set properties.
$second->title = 'The Colour Of Magic';
$second->author = 'Terry Pratchett';
$second->publisher = 'Colin Smythe';
$second->yearOfPublication = 1983;


// Echo'd properties.
echo $book->title . PHP_EOL;
echo $book->author . PHP_EOL;
echo $book->publisher . PHP_EOL;
echo $book->yearOfPublication . PHP_EOL;

echo $book->getBookDescription() . PHP_EOL;