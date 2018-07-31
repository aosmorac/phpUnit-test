<?php

include("/var/www/html/src/Codility.php");

use PHPUnit\Framework\TestCase;

final class CodilityTest extends TestCase
{

    /**
    * 001. BinaryGap
    * @dataProvider binaryGapProvider
    **/
    public function testBinaryGap($N, $expected)
    {
        $result = Codility::BinaryGap($N);
        echo PHP_EOL;
        echo 'Initial binary: '.$N;
        echo PHP_EOL;
        echo 'Result Expected: '.$expected;
        echo PHP_EOL;
        echo 'Result: '.$result;
        echo PHP_EOL;
        $this->assertEquals(
            $expected,
            $result
        );
    }
    public function binaryGapProvider() {
        return [
            ['100', 0],
            ['10001', 3],
            ['1001000101', 3],
            ['1010100100101', 2],
            ['100000000100000100000000001000000000000000010010', 16],
            ['00100', 0]
        ];
    }



}
