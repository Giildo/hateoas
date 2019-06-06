<?php

namespace Jojotique\Hateoas;

use Jojotique\Hateoas\Interfaces\LinkFactoryInterface;
use Jojotique\Hateoas\Interfaces\LinkInterface;
use Jojotique\Hateoas\Links\LinkDeleteShow;
use Jojotique\Hateoas\Links\LinkGetList;
use Jojotique\Hateoas\Links\LinkGetShow;
use Jojotique\Hateoas\Links\LinkPostShow;
use Jojotique\Hateoas\Links\LinkUpdateShow;

class LinkFactory implements LinkFactoryInterface
{
    const GET_SHOW = 1;
    const GET_LIST = 2;
    const DELETE_SHOW = 3;
    const POST_SHOW = 4;
    const UPDATE_SHOW = 5;

    /**
     * {@inheritDoc}
     */
    public static function create(
        string $type,
        string $href
    ): ?LinkInterface {
        switch ($type) {
            case self::GET_SHOW:
                return new LinkGetShow($href);
                break;

            case self::GET_LIST:
                return new LinkGetList($href);
                break;

            case self::DELETE_SHOW:
                return new LinkDeleteShow($href);
                break;

            case self::POST_SHOW:
                return new LinkPostShow($href);
                break;

            case self::UPDATE_SHOW:
                return new LinkUpdateShow($href);
                break;
        };

        return null;
    }
}
