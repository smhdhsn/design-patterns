<?php

namespace Patterns\Structural\Bridge\Forms;

use Patterns\Structural\Bridge\Abstracts\View;

class Popup extends View
{
    /**
     * Showing details of a passed resource.
     */
    public function show(): void
    {
        echo $this->resource->title();
        echo $this->resource->description();
        echo $this->resource->url();
    }
}
