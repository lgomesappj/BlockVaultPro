<?php
/**
 * Tests for BlockVaultPro
 */

use PHPUnit\Framework\TestCase;
use Blockvaultpro\Blockvaultpro;

class BlockvaultproTest extends TestCase {
    private Blockvaultpro $instance;

    protected function setUp(): void {
        $this->instance = new Blockvaultpro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockvaultpro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
