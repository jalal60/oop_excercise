<?php
//Write a PHP a class hierarchy for a library system, 
//including classes like 'LibraryItem', 'Book', 'DVD', etc. 
//Implement appropriate properties and methods for each class.

class LibraryItem
{
    protected $title;
    protected $author;
    protected $year;

    public function __construct($title, $author, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    //use getter for access outside...child classes
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getYear()
    {
        return $this->year;
    }
}

class Book extends LibraryItem
{
    protected $gener;
    public function __construct($title, $author, $year, $gener)
    {
        parent::__construct($title, $author, $year);
        $this->gener = $gener;
    }
    public function displayBook()
    {
        echo "Book Title:" . $this->getTitle() . PHP_EOL;
        echo "Author:" . $this->getAuthor() . PHP_EOL;
        echo "Published Year:" . $this->getYear() . PHP_EOL;
        echo "Edition:" . $this->gener . PHP_EOL;
    }
}
class DVD extends LibraryItem
{
    protected $duration;
    public function __construct($title, $author, $year, $duration)
    {
        parent::__construct($title, $author, $year);
        $this->duration = $duration;
    }
    public function displayDVD()
    {
        echo "DVD Title:" . $this->getTitle() . PHP_EOL;
        echo "Author:" . $this->getAuthor() . PHP_EOL;
        echo "Release Year:" . $this->getYear() . PHP_EOL;
        echo "Movie Duration in Hours:" . $this->duration . PHP_EOL;
    }
}

$book1 = new Book("Programming C++", "Liton", 2004, "Third Edition");
$dvd1 = new DVD("Jawan", "Atlee", 2023, 2.45);
$book1->displayBook();
echo PHP_EOL;
$dvd1->displayDVD();
