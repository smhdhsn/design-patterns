<?php

namespace Patterns\Structural\Bridge\Resources;

use Patterns\Structural\Bridge\Protocols\Resourceable;
use Patterns\Structural\Bridge\Subjects\Book;

class BookResource implements Resourceable
{
    /**
     * Instance of resource's subject.
     */
    public Book $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Presenting subject's url.
     */
    public function url(): string
    {
        return $this->book->getLinkToAmazon() . PHP_EOL;
    }

    /**
     * Presenting subject's title.
     */
    public function title(): string
    {
        return $this->book->getTitle() . PHP_EOL;
    }

    /**
     * Presenting subject's description.
     */
    public function description(): string
    {
        return $this->book->getSummary() . PHP_EOL;
    }
}
