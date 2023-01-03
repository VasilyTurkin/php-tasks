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

        $this->assertEquals('moscowTimeZone', $res);

        $res = transformToCamelCase('start_date_time');

        $this->assertEquals('startDateTime', $res);
    }

    public function testRemoveHtmlTags()
    {
        $res = removeHtmlTags('<strong>Header</strong><i>123</i><div>block</div>');

        $this->assertEquals('Header123block', $res);
    }

    public function testgetPhone()
    {
        $res = getPhone('Some address, tel. 129800');

        $this->assertEquals('tel. 129800', $res);

        $res = getPhone('tel 129838, some address');

        $this->assertEquals('tel 129838', $res);
    }

    public function testIsCharRepeat()
    {
        $res = isCharRepeat('test tttest', 't', 3);

        $this->assertEquals(true, $res);

        $res = isCharRepeat('Hello', 'l', 3);

        $this->assertEquals(false, $res);
    }

    public function testHasNumber()
    {
        $res = hasNumber('test 123');

        $this->assertEquals(true, $res);

        $res = hasNumber('123456');

        $this->assertEquals(false, $res);

    }

    public function testIsAlpaNumeric()
    {
        $res = isAlpaNumeric('test123');

        $this->assertEquals(true, $res);

        $res = isAlpaNumeric('test 123');

        $this->assertEquals(false, $res);

        $res = isAlpaNumeric('  test123');

        $this->assertEquals(false, $res);
    }

    public function testParseParams()
    {
        $res = parseParams('tutu.ru/poezda?from_date=20.10.2022&to_date=10.11.2022&train_number=120');

        $this->assertEquals([
            'from_date' => '20.10.2022',
            'to_date' => '10.11.2022',
            'train_number' => '120',
        ], $res);

        $res = parseParams('tutu.ru/poezda');

        $this->assertEquals([], $res);

        $res = parseParams('tutu.ru/poezda?name=&age=10');

        $this->assertEquals([
            'name' => '',
            'age' => '10',
        ], $res);

    }
}