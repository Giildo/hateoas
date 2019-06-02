<?php

namespace App\Interfaces;

interface HateoasBuilderInterface
{
    /**
     * Create a HATEOAS array for API REST.
     *
     * @param string     $type - Link type, list in LinkFactory constants.
     * @param string     $linkName - Url name in Symfony router.
     * @param array|null $params - Parameters for url construction, if necessary. E.g: ['id' => 3].
     *
     * @return LinkInterface - HATEOAS array.
     */
    public function build(
        string $type,
        string $linkName,
        ?array $params = []
    ): LinkInterface;
}
