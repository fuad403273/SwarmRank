<?php
/**
 * Tests for SwarmRank
 */

use PHPUnit\Framework\TestCase;
use Swarmrank\Swarmrank;

class SwarmrankTest extends TestCase {
    private Swarmrank $instance;

    protected function setUp(): void {
        $this->instance = new Swarmrank(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Swarmrank::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
