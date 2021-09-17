<?php

namespace Patterns\Behavioral\Iterator\Items;

use Patterns\Behavioral\Iterator\Protocols\Item;

class Book implements Item
{
    /**
     * Book's information.
     */
    private string $description;
    private string $title;

    public function __construct(string $title, string $description)
    {
        $this->description = $description;
        $this->title = $title;
    }

    /**
     * Book's title.
     */
    public function getTitle(): string
    {
        return $this->title . PHP_EOL;
    }

    /**
     * Book's description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
