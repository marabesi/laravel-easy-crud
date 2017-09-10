<?php

namespace Tests\Factory;

use EasyCrud\Factory\Configuration;
use Orchestra\Testbench\TestCase;
use EasyCrud\Providers\EasyCrud;

class ConfigurationTest extends TestCase
{
    private $originalConfig;

    protected function getEnvironmentSetUp($app)
    {
        $pathConfig = __DIR__ . '/../../';
        $file = realpath($pathConfig) . '/config/easy-crud.php' ;

        $this->originalConfig = include $file;
        $app['config']->set('easy-crud', $this->originalConfig);
    }

    public function testShouldReadTheEntireConfigurationFile()
    {
        $factory = new Configuration();

        $this->assertEquals($this->originalConfig, $factory->create());
    }

    /**
     * @dataProvider options
     */
    public function testShouldReadSpecificEntryInConfigurationFile($option)
    {
        $factory = new Configuration();

        $this->assertEquals(
            $this->originalConfig[$option],
            $factory->create($option)
        );
    }

    public function options()
    {
        return [
            ['models'],
            ['url_base'],
            ['middlewares'],
        ];
    }
}
