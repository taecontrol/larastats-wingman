# Laravel package to communicate with Larastats

[![Latest Version on Packagist](https://img.shields.io/packagist/v/taecontrol/larastats-wingman.svg?style=flat-square)](https://packagist.org/packages/taecontrol/larastats-wingman)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/taecontrol/larastats-wingman/run-tests?label=tests)](https://github.com/taecontrol/larastats-wingman/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/taecontrol/larastats-wingman/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/taecontrol/larastats-wingman/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/taecontrol/larastats-wingman.svg?style=flat-square)](https://packagist.org/packages/taecontrol/larastats-wingman)

Larastats Wingman is a package to push site monitoring data to Larastats.

## Installation

You can install the package via composer:

```bash
composer require taecontrol/larastats-wingman
```

On the `Handler.php` class, add the next code to capture all exceptions:

```php
...
/**
 * Register the exception handling callbacks for the application.
 *
 * @return void
 */
public function register()
{
    $this->reportable(function (Throwable $e) {
        /** @var LarastatsWingman $wingman */
        $wingman = app(LarastatsWingman::class);

        $wingman->captureException($e);
    });
}
...
```

Define the next `.env` vars:
```dotenv
LARASTATS_DOMAIN=https://larastats.test
LARASTATS_DOMAIN=********************
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Luis Güette](https://github.com/guetteman)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
