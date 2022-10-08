<?php

namespace Taecontrol\LarastatsWingman\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Taecontrol\LarastatsWingman\LarastatsWingman
 */
class LarastatsWingman extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Taecontrol\LarastatsWingman\LarastatsWingman::class;
    }
}
