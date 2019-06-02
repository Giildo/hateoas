<?php

namespace App;

use App\Interfaces\LinkInterface;

abstract class Link implements LinkInterface
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $rel;
    /**
     * @var string
     */
    protected $href;

    /**
     * Link constructor.
     * @param string $href
     */
    public function __construct(string $href)
    {
        $this->href = $href;
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function getRel(): string
    {
        return $this->rel;
    }

    /**
     * {@inheritDoc}
     */
    public function getHref(): string
    {
        return $this->href;
    }
}
