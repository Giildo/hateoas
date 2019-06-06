<?php

namespace Jojotique\Hateoas\Links;

use Jojotique\Hateoas\Interfaces\LinkInterface;
use Jojotique\Hateoas\Link;

class LinkDeleteShow extends Link implements LinkInterface
{
    protected $rel = 'DELETE';
    protected $type = 'self';
}
