<?php

namespace App\Interfaces;

interface LinkInterface
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return string
     */
    public function getRel(): string;

    /**
     * @return string
     */
    public function getHref(): string;
}
