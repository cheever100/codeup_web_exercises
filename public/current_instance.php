<?php

// Defined the class.
	class Book
	{
// Declared properties.
	public $title;
	public $author;
	public $publisher;

// Declared 'summary' as a method.
	function summary() {
// Outputed a string label for each field (Title, Author, Publisher);
// Concatenated the field value (i.e. 'this title', by using $this to refer to the current instance (new Book);
// and then the object ($book)-> operator(i.e. title), and the property (i.e. 'Reaper Man').
		echo 'Title: ' . $this->title . PHP_EOL;
		echo 'Author: ' . $this->author . PHP_EOL;
		echo 'Publisher: ' . $this->publisher . PHP_EOL;
		 }
 }

// Created a new book instance.
 	$book = new Book;

// Set class properties.
	$book->title = 'Reaper Man';
	$book->author = 'Terry Pratchett';
	$book->publisher = 'Victor Gollancz';

// Outputed a book summary.
 	$book->summary();