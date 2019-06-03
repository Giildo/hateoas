<?php

namespace Jojotique\Links;

use Jojotique\Interfaces\LinkInterface;
use Jojotique\Link;

class LinkUpdateShow extends Link implements LinkInterface
{
    protected $rel = 'PATCH/PUT';
    protected $type = 'self';
}
