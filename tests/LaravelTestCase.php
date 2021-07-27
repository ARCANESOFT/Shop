<?php

declare(strict_types=1);

namespace Arcanesoft\Shop\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class LaravelTestCase extends BaseTestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            \Arcanedev\LaravelImpersonator\ImpersonatorServiceProvider::class,
            \Arcanedev\Notify\NotifyServiceProvider::class,
            \Arcanedev\LaravelMetrics\MetricServiceProvider::class,
            \Arcanedev\LaravelPolicies\PoliciesServiceProvider::class,
            \Arcanesoft\Foundation\FoundationServiceProvider::class,
            \Arcanesoft\Shop\ShopServiceProvider::class,
        ];
    }
}
