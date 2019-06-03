<?php

namespace Jojotique\Links;

use Jojotique\Interfaces\LinkInterface;
use Jojotique\Link;

class LinkGetShow extends Link implements LinkInterface
{
    protected $rel = 'GET';
    protected $type = 'self';
}
