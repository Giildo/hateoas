<?php

namespace App\Interfaces;

interface LinkFactoryInterface
{
    /**
     * @param string $type
     * @param string $href
     *
     * @return LinkInterface|null
     */
    public static function create(string $type, string $href): ?LinkInterface;
}