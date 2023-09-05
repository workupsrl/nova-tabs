<?php

declare(strict_types=1);

namespace Workup\Nova\Tabs\Tests\Feature;

use Workup\Nova\Tabs\Tabs;
use Workup\Nova\Tabs\Tests\TestCase;

class TabsTest extends TestCase
{
    public function testCanMakeTabsObject(): void
    {
        $tabs = Tabs::make([]);

        self::assertInstanceOf(Tabs::class, $tabs);
    }
}
