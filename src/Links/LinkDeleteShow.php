<?php

namespace App\Links;

use App\Interfaces\LinkInterface;
use App\Link;

class LinkDeleteShow extends Link implements LinkInterface
{
    protected $rel = 'DELETE';
    protected $type = 'self';
}
