<?php

namespace Tests;

use Jojotique\Hateoas\HateoasBuilder;
use Jojotique\Hateoas\LinkFactory;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class HateoasBuilderTest extends TestCase
{
    /**
     * @var HateoasBuilder
     */
    private $builder;
    /**
     * @var UrlGeneratorInterface|MockObject
     */
    private $urlGenerator;

    protected function setUp(): void
    {
        $this->urlGenerator = $this->createMock(UrlGeneratorInterface::class);

        $this->builder = new HateoasBuilder($this->urlGenerator);
    }

    public function test_When_TheTypeURLIsGetShow_Then_BuilderReturnsTheGoodLink()
    {
        $this->urlGenerator->method('generate')->willReturn('/api/users/1');

        $link = $this->builder->build(
            LinkFactory::GET_SHOW,
            'user_show',
            ['id' => 1]
        );

        self::assertEquals('GET', $link->getRel());
        self::assertEquals('self', $link->getType());
        self::assertEquals('/api/users/1', $link->getHref());
    }

    public function test_When_TheTypeURLIsGetList_Then_BuilderReturnsTheGoodLink()
    {
        $this->urlGenerator->method('generate')->willReturn('/api/users');

        $link = $this->builder->build(
            LinkFactory::GET_LIST,
            'user_list'
        );

        self::assertEquals('GET', $link->getRel());
        self::assertEquals('list', $link->getType());
        self::assertEquals('/api/users', $link->getHref());
    }

    public function test_When_TheTypeURLIsDeleteShow_Then_BuilderReturnsTheGoodLink()
    {
        $this->urlGenerator->method('generate')->willReturn('/api/users/1');

        $link = $this->builder->build(
            LinkFactory::DELETE_SHOW,
            'user_delete'
        );

        self::assertEquals('DELETE', $link->getRel());
        self::assertEquals('self', $link->getType());
        self::assertEquals('/api/users/1', $link->getHref());
    }

    public function test_When_TheTypeURLIsPostShow_Then_BuilderReturnsTheGoodLink()
    {
        $this->urlGenerator->method('generate')->willReturn('/api/users');

        $link = $this->builder->build(
            LinkFactory::POST_SHOW,
            'user_create'
        );

        self::assertEquals('POST', $link->getRel());
        self::assertEquals('self', $link->getType());
        self::assertEquals('/api/users', $link->getHref());
    }

    public function test_When_TheTypeURLIsUpdateShow_Then_BuilderReturnsTheGoodLink()
    {
        $this->urlGenerator->method('generate')->willReturn('/api/users/1');

        $link = $this->builder->build(
            LinkFactory::UPDATE_SHOW,
            'user_update'
        );

        self::assertEquals('PATCH/PUT', $link->getRel());
        self::assertEquals('self', $link->getType());
        self::assertEquals('/api/users/1', $link->getHref());
    }

    public function test_When_TheTypeURLIsNotValid_Then_BuilderReturnsNull()
    {
        $this->urlGenerator->method('generate')->willReturn('');

        $link = $this->builder->build(
            10,
            'user_update'
        );

        self::assertNull($link);
    }
}
