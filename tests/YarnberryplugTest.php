<?php
/**
 * Tests for YarnBerryPlug
 */

use PHPUnit\Framework\TestCase;
use Yarnberryplug\Yarnberryplug;

class YarnberryplugTest extends TestCase {
    private Yarnberryplug $instance;

    protected function setUp(): void {
        $this->instance = new Yarnberryplug(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Yarnberryplug::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
