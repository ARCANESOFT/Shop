<?php

declare(strict_types=1);

namespace Arcanesoft\Shop;

/**
 * Class     Blog
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class Shop
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /** @var  bool */
    public static $runsMigrations = true;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Get the shop table name.
     *
     * @param  string       $name
     * @param  string|null  $default
     * @param  bool         $prefixed
     *
     * @return string
     */
    public static function table(string $name, $default = null, $prefixed = true): string
    {
        $name = config()->get("arcanesoft.shop.database.tables.{$name}", $default);

        return $prefixed ? static::prefixTable($name) : $name;
    }

    /**
     * Get the model class by the given key.
     *
     * @param  string       $name
     * @param  string|null  $default
     *
     * @return string
     */
    public static function model(string $name, $default = null): string
    {
        // TODO: Throw exception if not found ?

        return config()->get("arcanesoft.shop.database.models.{$name}", $default);
    }

    /**
     * Make/Get the model instance.
     *
     * @param  string       $name
     * @param  string|null  $default
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder|mixed
     */
    public static function makeModel(string $name, $default = null)
    {
        return app()->make(static::model($name, $default));
    }

    /**
     * Add the shop prefix to the table.
     *
     * @param  string  $name
     *
     * @return string
     */
    public static function prefixTable(string $name): string
    {
        $prefix = config()->get('arcanesoft.shop.database.prefix');

        return $prefix ? $prefix.$name : $name;
    }
}
