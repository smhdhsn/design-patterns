<?php

namespace Patterns\Structural\Bridge\Subjects;

class Artist
{
    /**
     * Artist's information.
     */
    private string $fullname;
    private string $spotify;
    private string $bio;

    public function __construct(string $fullname, string $spotify, string $bio)
    {
        $this->fullname = $fullname;
        $this->spotify = $spotify;
        $this->bio = $bio;
    }

    /**
     * Artist's page on spotify.
     */
    public function getLinkToSpotify(): string
    {
        return $this->spotify . PHP_EOL;
    }

    /**
     * Artist's fullname.
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }

    /**
     * Artist's biography.
     */
    public function getBio(): string
    {
        return $this->bio;
    }

}
