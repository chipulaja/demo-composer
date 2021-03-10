<?php

use Chipulaja\DemoComposer\Demo;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testGenerator()
    {
        $demo = new Demo();
        $data = $demo->getData();
        $this->assertEquals($data, "halo dunia");
    }
}
