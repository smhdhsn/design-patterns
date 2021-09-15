<?php

namespace Patterns\Structural\Bridge\Resources;

use Patterns\Structural\Bridge\Protocols\Resourceable;
use Patterns\Structural\Bridge\Subjects\Artist;

class ArtistResource implements Resourceable
{
    /**
     * Instance of resource's subject.
     */
    public Artist $artist;

    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }

    /**
     * Presenting subject's url.
     */
    public function url(): string
    {
        return $this->artist->getLinkToSpotify() . PHP_EOL;
    }

    /**
     * Presenting subject's title.
     */
    public function title(): string
    {
        return $this->artist->getFullname() . PHP_EOL;
    }

    /**
     * Presenting subject's description.
     */
    public function description(): string
    {
        return $this->artist->getBio() . PHP_EOL;
    }
}
