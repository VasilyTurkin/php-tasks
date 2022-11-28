<?php

require __DIR__ . '/../../src/datetime/schedule.php';

use PHPUnit\Framework\TestCase;

class ScheduleTest extends TestCase
{
    public function testPrepareSchedule()
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
}