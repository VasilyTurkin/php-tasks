<?php

require __DIR__ . '/../../src/datetime/schedule.php';

use PHPUnit\Framework\TestCase;

class ScheduleTest extends TestCase
{
    public function testPrepareScheduleWestToEast()
    {
        $schedule = [
            [
                'station' => 'Москва',
                'arrivalDateTime' => null,
                'departureDateTime' => '2022-10-13 00:35:00',
                'localTimeZoneOffset' => 3
            ],
            [
                'station' => 'Балезино',
                'arrivalDateTime' => '2022-10-13 22:35:00',
                'departureDateTime' => '2022-10-13 23:03:00',
                'localTimeZoneOffset' => 4
            ],
            [
                'station' => 'Пермь',
                'arrivalDateTime' => '2022-10-14 03:17:00',
                'departureDateTime' => '2022-10-14 03:40:00',
                'localTimeZoneOffset' => 5
            ],
            [
                'station' => 'Екатеринбург',
                'arrivalDateTime' => '2022-10-14 09:25:00',
                'departureDateTime' => '2022-10-14 10:07:00',
                'localTimeZoneOffset' => 5
            ],
            [
                'station' => 'Омск',
                'arrivalDateTime' => '2022-10-14 23:20:00',
                'departureDateTime' => null,
                'localTimeZoneOffset' => 6
            ],
        ];

        $result = prepareTimeToLocal($schedule);

        $this->assertEquals([
            [
                'station' => 'Москва',
                'arrivalDateTime' => null,
                'departureDateTime' => '2022-10-13 00:35:00',
                'localTimeZoneOffset' => 3
            ],
            [
                'station' => 'Балезино',
                'arrivalDateTime' => '2022-10-13 23:35:00',
                'departureDateTime' => '2022-10-14 00:03:00',
                'localTimeZoneOffset' => 4
            ],
            [
                'station' => 'Пермь',
                'arrivalDateTime' => '2022-10-14 05:17:00',
                'departureDateTime' => '2022-10-14 05:40:00',
                'localTimeZoneOffset' => 5
            ],
            [
                'station' => 'Екатеринбург',
                'arrivalDateTime' => '2022-10-14 11:25:00',
                'departureDateTime' => '2022-10-14 12:07:00',
                'localTimeZoneOffset' => 5
            ],
            [
                'station' => 'Омск',
                'arrivalDateTime' => '2022-10-15 02:20:00',
                'departureDateTime' => null,
                'localTimeZoneOffset' => 6
            ],
        ], $result);
    }

    public function testPrepareScheduleEastToWest()
    {
        $schedule = [
            [
                'station' => 'Москва',
                'arrivalDateTime' => null,
                'departureDateTime' => '2022-10-12 21:35:00',
                'localTimeZoneOffset' => 3,
            ],
            [
                'station' => 'Вильнюс',
                'arrivalDateTime' => '2022-10-13 00:25:00',
                'departureDateTime' => '2022-10-13 00:30:00',
                'localTimeZoneOffset' => 2,
            ],
            [
                'station' => 'Варшава',
                'arrivalDateTime' => '2022-10-13 12:25:00',
                'departureDateTime' => null,
                'localTimeZoneOffset' => 1,
            ],
        ];

        $result = prepareTimeToLocal($schedule);

        $this->assertEquals([
            [
                'station' => 'Москва',
                'arrivalDateTime' => null,
                'departureDateTime' => '2022-10-12 21:35:00',
                'localTimeZoneOffset' => 3,
            ],
            [
                'station' => 'Вильнюс',
                'arrivalDateTime' => '2022-10-12 23:25:00',
                'departureDateTime' => '2022-10-12 23:30:00',
                'localTimeZoneOffset' => 2,
            ],
            [
                'station' => 'Варшава',
                'arrivalDateTime' => '2022-10-13 10:25:00',
                'departureDateTime' => null,
                'localTimeZoneOffset' => 1,
            ],
        ], $result);
    }

    public function testPrepareScheduleUtsCrossing()
    {
        $schedule = [
            [
                'station' => 'Нуук',
                'arrivalDateTime' => null,
                'departureDateTime' => '2022-10-12 21:35:00',
                'localTimeZoneOffset' => -2,
            ],
            [
                'station' => 'Лондон',
                'arrivalDateTime' => '2022-10-12 22:25:00',
                'departureDateTime' => '2022-10-12 22:30:00',
                'localTimeZoneOffset' => 0,
            ],
            [
                'station' => 'Москва',
                'arrivalDateTime' => '2022-10-13 12:25:00',
                'departureDateTime' => null,
                'localTimeZoneOffset' => 3,
            ],
        ];

        $result = prepareTimeToLocal($schedule);

        $this->assertEquals([
            [
                'station' => 'Нуук',
                'arrivalDateTime' => null,
                'departureDateTime' => '2022-10-12 16:35:00',
                'localTimeZoneOffset' => -2,
            ],
            [
                'station' => 'Лондон',
                'arrivalDateTime' => '2022-10-12 19:25:00',
                'departureDateTime' => '2022-10-12 19:30:00',
                'localTimeZoneOffset' => 0,
            ],
            [
                'station' => 'Москва',
                'arrivalDateTime' => '2022-10-13 12:25:00',
                'departureDateTime' => null,
                'localTimeZoneOffset' => 3,
            ],
        ], $result);
    }
}
