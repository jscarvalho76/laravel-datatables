# jQuery DataTables API for Laravel
[![Laravel 12](https://img.shields.io/badge/Laravel-12-orange.svg)](http://laravel.com)
[![Latest Stable Version](https://img.shields.io/packagist/v/jeffersoncarvalho/laravel-datatables-oracle.svg)](https://packagist.org/packages/jeffersoncarvalho/laravel-datatables-oracle)

[![Total Downloads](https://poser.pugx.org/jeffersoncarvalho/laravel-datatables-oracle/d/total.svg)](https://packagist.org/packages/jeffersoncarvalho/laravel-datatables-oracle)
[![License](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/jeffersoncarvalho/laravel-datatables-oracle)

Laravel package for handling [server-side](https://www.datatables.net/manual/server-side) works of [DataTables](http://datatables.net) jQuery Plugin via [AJAX option](https://datatables.net/reference/option/ajax) by using Eloquent ORM, Fluent Query Builder or Collection.

```php
use JeffersonCarvalho\DataTables\Facades\DataTables;

return DataTables::eloquent(User::query())->toJson();
return DataTables::query(DB::table('users'))->toJson();
return DataTables::collection(User::all())->toJson();

return DataTables::make(User::query())->toJson();
return DataTables::make(DB::table('users'))->toJson();
return DataTables::make(User::all())->toJson();
```

## Requirements
- [PHP >= 8.2](http://php.net/)
- [Laravel Framework](https://github.com/laravel/framework)
- [DataTables](http://datatables.net/)

## Documentations

- [Github Docs](https://github.com/yajra/laravel-datatables-docs)
- [Laravel DataTables Quick Starter](https://yajrabox.com/docs/laravel-datatables/master/quick-starter)
- [Laravel DataTables Documentation](https://yajrabox.com/docs/laravel-datatables)

## Laravel Version Compatibility

| Laravel | Package  |
|:--------|:---------|
| 12.x    | 12.x     |

## Quick Installation

### Install only this library

```bash
composer require jeffersoncarvalho/laravel-datatables-oracle:"^12"
```

#### Service Provider & Facade (Optional on Laravel 5.5+)

Register the provider and facade on your `config/app.php` file.
```php
'providers' => [
    ...,
    JeffersonCarvalho\DataTables\DataTablesServiceProvider::class,
]

'aliases' => [
    ...,
    'DataTables' => JeffersonCarvalho\DataTables\Facades\DataTables::class,
]
```

#### Configuration (Optional)

```bash
php artisan vendor:publish --provider="JeffersonCarvalho\DataTables\DataTablesServiceProvider"
```

And that's it! Start building out some awesome DataTables!

## Debugging Mode

To enable debugging mode, just set `APP_DEBUG=true` and the package will include the queries and inputs used when processing the table.

> [!IMPORTANT]
> Please ensure that the `APP_DEBUG` config is set to false when your app is in production.

## PHP ARTISAN SERVE BUG

Please avoid using `php artisan serve` when developing the package.
There are known bugs when using this where Laravel randomly returns a redirect and 401 (Unauthorized) if the route requires authentication and a 404 NotFoundHttpException on valid routes.

It is advised to use [Homestead](https://laravel.com/docs/5.4/homestead) or [Valet](https://laravel.com/docs/5.4/valet) when working with the package.

## Contributing

Please see [CONTRIBUTING](https://github.com/yajra/laravel-datatables/blob/master/.github/CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email [aqangeles@gmail.com](mailto:aqangeles@gmail.com) instead of using the issue tracker.

## Credits

- [Arjay Angeles](https://github.com/yajra)
- [bllim/laravel4-datatables-package](https://github.com/bllim/laravel4-datatables-package)
- [All Contributors](https://github.com/yajra/laravel-datatables/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/yajra/laravel-datatables/blob/master/LICENSE.md) for more information.
