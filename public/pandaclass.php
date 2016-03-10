<?php
// CLASS CODE
// Defined class.
class Book 
	{
	// Declared properties.
	public $title;

	public $author;

	public $publisher;

	public $yearOfPublication;

	public $format = 'Paperback';



// function getBookDescription() {
// 		return $this->title . " was written by " . $this->author . ".";
// 		}
	}
	$book = new Book;

// Changed the value of format.
	$book->format = 'Hardback';

	echo $book->format . PHP_EOL;