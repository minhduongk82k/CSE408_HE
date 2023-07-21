<?php

interface IBook
{
    public function getDetails();
}

class Book implements IBook
{
    private $details;

    public function __construct($title, $author, $publisher, $publicationYear, $ISBN, $chapters)
    {
        $this->details = [
            'title' => $title,
            'author' => $author,
            'publisher' => $publisher,
            'publicationYear' => $publicationYear,
            'ISBN' => $ISBN,
            'chapters' => $chapters
        ];
    }

    public function getDetails()
    {
        return $this->details;
    }
}

class BookList
{
    private $books = [];

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }

    private function sortByField($field)
    {
        usort($this->books, function ($a, $b) use ($field) {
            return strcmp($a->getDetails()[$field], $b->getDetails()[$field]);
        });
    }

    public function sortByAuthor()
    {
        $this->sortByField('author');
    }

    public function sortByBookTitle()
    {
        $this->sortByField('title');
    }

    public function sortByPublicationYear()
    {
        $this->sortByField('publicationYear');
    }
}

$bookList = new BookList();


$book1 = new Book("Title 1", "Author 2", "Publisher 3", 2021, "ISBN-12345", ["Chapter 1", "Chapter 2"]);
$book2 = new Book("Title 2", "Author 1", "Publisher 3", 2019, "ISBN-67890", ["Chapter 1", "Chapter 2"]);
$book3 = new Book("Title 3", "Author 3", "Publisher 2", 2020, "ISBN-54321", ["Chapter 1", "Chapter 2"]);
$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book3);


$bookList->sortByAuthor();


foreach ($bookList->getBooks() as $book) {
    $details = $book->getDetails();
    echo "Title: " . $details['title'] . "<br>";
    echo "Author: " . $details['author'] . "<br>";
    echo "Publisher: " . $details['publisher'] . "<br>";
    echo "Publication Year: " . $details['publicationYear'] . "<br>";
    echo "ISBN: " . $details['ISBN'] . "<br>";
    echo "Chapters: " . implode(", ", $details['chapters']) . "<br><br>";
}

?>