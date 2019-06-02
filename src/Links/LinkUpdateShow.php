<?php

namespace App\Links;

use App\Interfaces\LinkInterface;
use App\Link;

class LinkUpdateShow extends Link implements LinkInterface
{
    protected $rel = 'PATCH/PUT';
    protected $type = 'self';
}
