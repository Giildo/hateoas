<?php

namespace Jojotique\Hateoas\Links;

use Jojotique\Hateoas\Interfaces\LinkInterface;
use Jojotique\Hateoas\Link;

class LinkUpdateShow extends Link implements LinkInterface
{
    protected $rel = 'PATCH/PUT';
    protected $type = 'self';
}
