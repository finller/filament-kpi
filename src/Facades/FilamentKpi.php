<?php

namespace Finller\FilamentKpi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Finller\FilamentKpi\FilamentKpi
 */
class FilamentKpi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Finller\FilamentKpi\FilamentKpi::class;
    }
}
