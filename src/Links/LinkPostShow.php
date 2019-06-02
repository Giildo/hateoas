<?php

namespace App\Links;

use App\Interfaces\LinkInterface;
use App\Link;

class LinkPostShow extends Link implements LinkInterface
{
    protected $rel = 'POST';
    protected $type = 'self';
}
