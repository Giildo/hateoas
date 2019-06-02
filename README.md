# jojotique/hateoas

## Installation

The preferred method of installation is via [Packagist]() and [Composer](https://getcomposer.org/).

```php
composer require jojotique/hateoas
```

## Utilisation

To use the package, you have to fill the information:
- __type__: the link type, in the LinkFactory constants.
- __url name__: the url name in Symfony router.
- __options__: the options if necessary with the url name in url generator.

__Constructor of method__:
```php
$this->hateoasBuilder->build(
    type,
    url name,
    options
)
```

__Example__:
```php
$this->hateoasBuilder->build(
    LinkFactory::GET_SHOW,
    'users_show',
    ['id' => $user->getId()]
)
```