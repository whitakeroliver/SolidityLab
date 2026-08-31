<?php
/**
 * Tests for SolidityLab
 */

use PHPUnit\Framework\TestCase;
use Soliditylab\Soliditylab;

class SoliditylabTest extends TestCase {
    private Soliditylab $instance;

    protected function setUp(): void {
        $this->instance = new Soliditylab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditylab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
