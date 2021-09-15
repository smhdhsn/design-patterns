<?php

namespace Patterns\Structural\Bridge\Subjects;

class Book
{
    /**
     * Book's information.
     */
    private string $summary;
    private string $amazon;
    private string $title;

    public function __construct(string $title, string $amazon, string $summary)
    {
        $this->summary = $summary;
        $this->amazon = $amazon;
        $this->title = $title;
    }

    /**
     * Book's link on Amazon.
     */
    public function getLinkToAmazon(): string
    {
        return $this->amazon;
    }

    /**
     * Book's title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Book's summary.
     */
    public function getSummary(): string
    {
        return $this->summary;
    }
}
