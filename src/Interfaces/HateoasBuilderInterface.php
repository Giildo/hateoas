<?php

namespace Jojotique\Interfaces;

interface HateoasBuilderInterface
{
    /**
     * Create a HATEOAS array for API REST.
     * Create a link with the LinkFactory.
     * Use the Link type and the Symfony URL Generator and gives them to the link factory.
     *
     * @param string     $type - Link type, list in LinkFactory constants.
     * @param string     $linkName - Url name in Symfony router.
     * @param array|null $params - Parameters for url construction, if necessary. E.g: ['id' => 3].
     *
     * @return LinkInterface|null - HATEOAS array.
     */
    public function build(
        string $type,
        string $linkName,
        ?array $params = []
    ): ?LinkInterface;
}
