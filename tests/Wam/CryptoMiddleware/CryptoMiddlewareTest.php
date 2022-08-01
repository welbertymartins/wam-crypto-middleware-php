<?php

namespace Test\Wam\CryptoMiddleware;

use Test\TestCases\BasicTestCase;
use Wam\CryptoMiddleware\CryptoMiddleware;

class CryptoMiddlewareTest extends BasicTestCase
{
    public function testEncodeDecode(): void
    {
        $this->assertEquals(
            'hello world',
            CryptoMiddleware::decode(CryptoMiddleware::encode('hello world'))
        );
    }

    public function testHash(): void
    {
        $this->assertEquals(
            '309ecc489c12d6eb4cc40f50c902f2b4d0ed77ee511a7c7a9bcd3ca86d4cd86f989dd35bc5ff499670da34255b45b0cfd830e81f605dcf7dc5542e93ae9cd76f',
            CryptoMiddleware::hash('hello world')
        );
    }
}
