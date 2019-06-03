<?php

namespace Jojotique\Links;

use Jojotique\Interfaces\LinkInterface;
use Jojotique\Link;

class LinkPostShow extends Link implements LinkInterface
{
    protected $rel = 'POST';
    protected $type = 'self';
}
