<?php

namespace App\Links;

use App\Interfaces\LinkInterface;
use App\Link;

class LinkGetList extends Link implements LinkInterface
{
    protected $rel = 'GET';
    protected $type = 'list';
}
