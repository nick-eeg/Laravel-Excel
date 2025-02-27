<?php

use Orchestra\Testbench\TestCase as TestBenchTestCase;

class TestCase extends TestBenchTestCase
{

    public function testExcelClass()
    {
        $excel = App::make(\Maatwebsite\Excel\Excel::class);
        $this->assertInstanceOf(\Maatwebsite\Excel\Excel::class, $excel);
    }


    protected function getPackageProviders($app)
    {
        return [\Maatwebsite\Excel\ExcelServiceProvider::class];
    }


    protected function getPackagePath()
    {
        return realpath(implode(DIRECTORY_SEPARATOR, [
            __DIR__,
            '..',
            'src',
            'Maatwebsite',
            'Excel'
        ]));
    }
}
