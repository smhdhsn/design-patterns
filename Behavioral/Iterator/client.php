<?php

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

####################################
#  Actual client code starts here  #
####################################

use Patterns\Behavioral\Iterator\Iterables\BookList;
use Patterns\Behavioral\Iterator\Items\Book;

$bookCollection = new BookList;

/** Adding my favourite books into the the book collection */
$bookCollection->addBook(
    new Book(
        'The Raven',
        'The Raven is a narrative poem by American writer Edgar Allan Poe.'
    )
);

$bookCollection->addBook(
    new Book(
        'The Tell-Tale Heart',
        'The Tell-Tale Heart is a short story by American writer Edgar Allan Poe.'
    )
);

$bookCollection->addBook(
    new Book(
        'The Murders in the Rue Morgue',
        'The Murders in the Rue Morgue is a short story by Edgar Allan Poe.'
    )
);

$iterator = $bookCollection->getIterator();

while ($iterator->hasNext()) {
    $book = $iterator->getCurrent();

    echo $book->getTitle();
    echo $book->getDescription();

    $iterator->next();

    echo $iterator->hasNext() ? "\n\n" : PHP_EOL;
}
