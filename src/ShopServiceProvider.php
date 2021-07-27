<?php

declare(strict_types=1);

namespace Arcanesoft\Shop;

use Arcanesoft\Foundation\Support\Providers\PackageServiceProvider;

/**
 * Class     ShopServiceProvider
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class ShopServiceProvider extends PackageServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * The package name.
     *
     * @var  string
     */
    protected $package = 'shop';

    /**
     * Merge multiple config files into one instance (package name as root key)
     *
     * @var bool
     */
    protected $multiConfigs = true;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerConfig();

        $this->registerProviders([
            Providers\AuthServiceProvider::class,
            Providers\EventServiceProvider::class,
            Providers\MetricServiceProvider::class,
            Providers\RouteServiceProvider::class,
            Providers\ViewServiceProvider::class,
        ]);
    }

    /**
     * Boot the service provider.
     */
    public function boot(): void
    {
        $this->loadTranslations();
        $this->loadViews();

        if ($this->app->runningInConsole()) {
            $this->publishConfig();
            $this->publishTranslations();
            $this->publishViews();

            Shop::$runsMigrations
                ? $this->loadMigrations()
                : $this->publishMigrations();
        }
    }
}
