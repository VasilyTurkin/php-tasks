<?php

require __DIR__ . '/../../src/regex/regex.php';

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testCountWord()
    {
        $str = 'message with and, and another and';
        $count = countWord($str, 'and');

        $this->assertIsInt($count);
        $this->assertEquals(3, $count);
    }

    public function testReplaceTest()
    {
        $str = 'testmessage with testword test';
        $res = replaceTest($str, '');

        $this->assertEquals('message with word ', $res);
    }

    public function testClearString()
    {
        $str = '&.  some message   1234, with numbers -=+-??';
        $res = clearString($str);

        $this->assertEquals('some message   1234 with numbers', $res);
    }

    public function testExtractNumbers()
    {
        $str = 'Get 123 something 3out of your 0 system786775';
        $res = extractNumbers($str);

        $this->assertEquals([123, 3, 0, 786775], $res);
    }

    public function testTrimSpaces()
    {
        $str = 'test    test       test';
        $res = trimSpaces($str); // => 'test test test'

        $this->assertEquals('test test test', $res);
    }
}