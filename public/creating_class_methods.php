<?php

// Defined the class.
 class Book
 {
// Declared properties.
	 public $title;
	 public $author;
	 public $publisher;
// Added a format property to our book class.
	 public $format = 'Paperback';

// Declared 'sayHello' as a "method".
	 function sayHello() {
	 return 'Hello!' . PHP_EOL;
	 }
 }

// Created a new book instance.
 	$book = new Book;

// Changed the value of format from 'Paperback' to 'Hardback'.
 	$book->format = 'Hardback';

// Executed the 'sayHello' method.
 	echo $book->sayHello();

 	echo $book->format . PHP_EOL;