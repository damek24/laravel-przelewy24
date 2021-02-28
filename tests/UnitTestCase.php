<?php

namespace Tests;

use Mockery as m;
use Orchestra\Testbench\TestCase;

abstract class UnitTestCase extends TestCase
{
    public function tearDown(): void
    {
        m::close();
    }
}
