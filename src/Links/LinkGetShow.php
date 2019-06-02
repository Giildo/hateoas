<?php

namespace App\Links;

use App\Interfaces\LinkInterface;
use App\Link;

class LinkGetShow extends Link implements LinkInterface
{
    protected $rel = 'GET';
    protected $type = 'self';
}
