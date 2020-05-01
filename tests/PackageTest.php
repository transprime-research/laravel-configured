<?php

namespace Transprime\Configured\Tests;

use PHPUnit\Framework\TestCase;
use Transprime\Configured\{Configured, Exceptions\ConfiguredException};

class ConfiguredTest extends TestCase
{
    public function testConfiguredIsCreated()
    {
        $this->assertIsObject(new Configured());
    }
}