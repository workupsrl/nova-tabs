<?php

declare(strict_types=1);

namespace Workup\Nova\Tabs\Tests;

use Workup\Nova\Tabs\TabsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            TabsServiceProvider::class,
        ];
    }
}
