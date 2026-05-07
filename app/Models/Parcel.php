<?php

namespace App\Models;

class Parcel
{
    protected static function resolveFacade()
    {
        return app()->make(Parcel::class);
    }

    public static function __callStatic(string $method, array $arguments)
    {
        return self::resolveFacade()->$method(...$arguments);
    }
}
