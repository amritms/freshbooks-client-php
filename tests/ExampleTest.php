<?php

namespace Amritms\FreshbooksClientPhp\Tests;

use Orchestra\Testbench\TestCase;
use Amritms\FreshbooksClientPhp\FreshbooksClientPhpServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [FreshbooksClientPhpServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
