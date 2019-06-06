<?php

namespace Jojotique\Hateoas\Links;

use Jojotique\Hateoas\Interfaces\LinkInterface;
use Jojotique\Hateoas\Link;

class LinkPostShow extends Link implements LinkInterface
{
    protected $rel = 'POST';
    protected $type = 'self';
}
