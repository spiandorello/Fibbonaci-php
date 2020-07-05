<?php

use PHPUnit\Framework\TestCase;
use Fibonacci\Fibonacci;

class FibonacciTest extends TestCase
{
    private Fibonacci $instance;

    protected function setUp(): void
    {
       $this->instance = new Fibonacci();
    }

    public function testGetSeries()
    {
        $this->assertIsArray($this->instance->getSeries());
    }
}