<?php

namespace Wam\CryptoMiddleware;

class CryptoMiddleware
{
    public static function encode(string $content): string
    {
        return \base64_encode($content);
    }

    public static function decode(string $content): string
    {
        return \base64_decode($content);
    }

    public static function hash(string $key): string
    {
        return \hash('sha512', $key);
    }
}
