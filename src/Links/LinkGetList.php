<?php

namespace Jojotique\Links;

use Jojotique\Interfaces\LinkInterface;
use Jojotique\Link;

class LinkGetList extends Link implements LinkInterface
{
    protected $rel = 'GET';
    protected $type = 'list';
}
