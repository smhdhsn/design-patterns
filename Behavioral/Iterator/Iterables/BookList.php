<?php

namespace Patterns\Behavioral\Iterator\Iterables;

use Patterns\Behavioral\Iterator\Protocols\{ItemIterable, ItemIterator};
use Patterns\Behavioral\Iterator\Iterators\BookListIterator;
use Patterns\Behavioral\Iterator\Items\Book;

class BookList implements ItemIterable
{
    /**
     * List of books.
     */
    public array $books = [];

    /**
     * Getting book iterator.
     */
    public function getIterator(): ItemIterator
    {
        return new BookListIterator($this);
    }

    /**
     * Adding a book to the collection of books.
     */
    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    /**
     * Removing a book from the collection of books.
     */
    public function removeBook(Book $book): void
    {
        if(($key = array_search($book, $this->books, true))) {
            unset($this->books[$key]);
        }
    }
}
