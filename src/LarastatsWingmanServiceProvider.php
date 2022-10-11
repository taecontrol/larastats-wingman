<?php

namespace Taecontrol\LarastatsWingman;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LarastatsWingmanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larastats-wingman')
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->bind(LarastatsWingman::class, function () {
            return new LarastatsWingman();
        });
    }
}
