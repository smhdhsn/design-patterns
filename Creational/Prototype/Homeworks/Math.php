<?php

namespace Patterns\Creational\Prototype\Homeworks;

class Math
{
    /**
     * Math homework's information.
     */
    private string $content;
    private string $author;

    public function __construct(string $author, string $content)
    {
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * Getting homework paper.
     */
    public function getHomeworkPaper(): string
    {
        return $this->author . PHP_EOL . $this->content . PHP_EOL;
    }

    /**
     * Changing the homework's content if it's being cloned.
     */
    public function __clone()
    {
        $this->author = "Not {$this->author}";
        $this->content = "This is not {$this->author}'s content!\n{$this->content}";
    }
}
