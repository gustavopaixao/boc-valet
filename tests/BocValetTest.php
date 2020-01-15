<?php

declare(strict_types=1);

namespace GustavoPaixao\Boc\Valet\Test;

use GustavoPaixao\Boc\Valet\BocValet;

class BocValetTest extends TestCase
{
    public function testGetHello()
    {
        $object = \Mockery::mock(BocValet::class);
        $object->shouldReceive('getHello')->passthru();

        $this->assertSame('Hello, World!', $object->getHello());
    }
}
