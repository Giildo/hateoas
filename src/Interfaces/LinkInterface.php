<?php

namespace App\Interfaces;

interface LinkInterface
{
    /**
     * The relation type.
     * E.g.: self or list.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * The verb used to use the link.
     *
     * @return string
     */
    public function getRel(): string;

    /**
     * The URL to use the link.
     *
     * @return string
     */
    public function getHref(): string;
}
