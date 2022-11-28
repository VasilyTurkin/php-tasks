<?php

function prepareTimeToLocal(array $schedule): array
{
    $result = [];
    define('MOSCOW_TIME_ZONE_OFFSET', 3);
    foreach ($schedule as $item) {
        $timeDiff = ($item['localTimeZoneOffset'] - MOSCOW_TIME_ZONE_OFFSET) * 60 * 60;
        $arrival = null;
        if (!empty($item['arrivalDateTime'])) {
            $arrival = strtotime($item['arrivalDateTime']);
            $arrival = $arrival + $timeDiff;
            $arrival = date("Y-m-d H:i:s", $arrival);
        };
        $departure = null;
        if (!empty($item['departureDateTime'])) {
            $departure = strtotime($item['departureDateTime']);
            $departure = $departure + $timeDiff;
            $departure = date("Y-m-d H:i:s", $departure);
        }
        $result[] = [
            'station' => $item['station'],
            'arrivalDateTime' => $arrival,
            'departureDateTime' => $departure,
            'localTimeZoneOffset' => $item['localTimeZoneOffset'],
        ];
    }

    return $result;
}

