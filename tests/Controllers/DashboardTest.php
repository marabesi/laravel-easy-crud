<?php

namespace Tests\Controllers;

use EasyCrud\Controllers\Dashboard;
use Orchestra\Testbench\TestCase;
use EasyCrud\Providers\EasyCrud;

class DashboardTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [EasyCrud::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $pathConfig = __DIR__ . '/../../';
        $file = realpath($pathConfig) . '/config/easy-crud.php' ;

        $this->originalConfig = include $file;
        
        $app['config']->set('easy-crud', $this->originalConfig);
    }

    public function testShouldRenderTheNumberOfRegisteredModels()
    {
        $this->visit('/')
            ->see('Easy CRUD!')
            ->see('Registered models')
            ->see('<div class="count">0</div>');
    }
}
