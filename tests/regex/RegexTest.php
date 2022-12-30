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

    public function testCountLetters()
    {
        $str = 'GivE somEone the benEfit of the doubt';
        $res = countLetters($str, 'e');

        $this->assertEquals(7, $res);

        $res = countLetters($str, 'E');

        $this->assertEquals(7, $res);
    }

    public function testExtractWords()
    {
        $res = extractWords('test123');

        $this->assertEquals(['test'], $res);

        $res = extractWords('one123two_three');

        $this->assertEquals(['one', 'two', 'three'], $res);
    }

    public function testTransformToCamelCase()
    {
        $res = transformToCamelCase('MOSCOW_TIME_ZONE');

        $this->assertEquals('moscow_Time_Zone', $res);

        $res = transformToCamelCase('start_date_time');

        $this->assertEquals('start_Date_Time', $res);
    }

    public function testRemoveHtmlTags()
    {
        $res = removeHtmlTags('<strong>Header</strong><i>123</i><div>block</div>');

        $this->assertEquals('Header123block', $res);

    }

}