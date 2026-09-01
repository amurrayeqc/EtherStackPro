<?php
/**
 * Tests for EtherStackPro
 */

use PHPUnit\Framework\TestCase;
use Etherstackpro\Etherstackpro;

class EtherstackproTest extends TestCase {
    private Etherstackpro $instance;

    protected function setUp(): void {
        $this->instance = new Etherstackpro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherstackpro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
