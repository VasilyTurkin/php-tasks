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
}