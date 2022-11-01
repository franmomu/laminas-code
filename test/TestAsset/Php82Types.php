<?php

namespace LaminasTest\Code\TestAsset;

use BadMethodCallException;

/**
 * This test assets contains new types introduced with the PHP 8.2.0 release
 *
 * @see https://wiki.php.net/rfc/null-false-standalone-types
 */
class Php82Types
{
    public function falseType(false $parameter): false
    {
        throw new BadMethodCallException('Not supposed to be run');
    }

    public function nullType(null $parameter): null
    {
        throw new BadMethodCallException('Not supposed to be run');
    }

    public function unionNullableFalseType(false|null $parameter): false|null
    {
        throw new BadMethodCallException('Not supposed to be run');
    }

    public function trueType(true $parameter): true
    {
        throw new BadMethodCallException('Not supposed to be run');
    }
}
