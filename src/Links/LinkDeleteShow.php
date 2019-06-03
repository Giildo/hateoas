<?php

namespace Jojotique\Links;

use Jojotique\Interfaces\LinkInterface;
use Jojotique\Link;

class LinkDeleteShow extends Link implements LinkInterface
{
    protected $rel = 'DELETE';
    protected $type = 'self';
}
