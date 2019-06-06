<?php

namespace Jojotique\Hateoas\Links;

use Jojotique\Hateoas\Interfaces\LinkInterface;
use Jojotique\Hateoas\Link;

class LinkGetShow extends Link implements LinkInterface
{
    protected $rel = 'GET';
    protected $type = 'self';
}
