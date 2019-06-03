<?php

namespace Jojotique\Interfaces;

interface LinkFactoryInterface
{
    /**
     * Create a link.
     * Get the right link object thanks to link type.
     *
     * @param string $type - To get the right link.
     * @param string $href - The URL build in HateoasBuilder with Symfony URL generator.
     *
     * @return LinkInterface|null
     */
    public static function create(
        string $type,
        string $href
    ): ?LinkInterface;
}