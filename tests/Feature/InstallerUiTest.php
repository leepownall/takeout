<?php

namespace Tests\Feature;

use Tests\TestCase;

class InstallerUiTest extends TestCase
{
    /** @test */
    function it_can_be_exited_without_errors()
    {
        $this->markTestIncomplete('Need to ask Nuno if we can test laravel-console-menu');
        \Artisan::call('install');
    }
}
