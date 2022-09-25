<?php
$time1 = $argv[1];
$time2 = $argv[2];
function sumTime(string $time1, string $time2): string
{
    $correctString = ' :1234567890';
    for ($i = 0; $i < strlen($time1); $i++) {
        if (!strpos($correctString, $time1[$i]) || strlen($time1) !== 8) {
            return 'введите 1 время, согласно примеру:"10:20:30" или "01:05:30"';
        }
    }
    for ($i = 0; $i < strlen($time2); $i++) {
        if (!strpos($correctString, $time2[$i]) || strlen($time2) !== 8) {
            return 'введите 2 время, согласно примеру:"10:20:30" или "01:05:30"';
        }
    }
    $hour1 = mb_substr($time1, 0, 2);
    $hour1 = +$hour1;
    $hour2 = mb_substr($time2, 0, 2);
    $hour2 = +$hour2;
    $sumHours = $hour1 + $hour2;
    while ($sumHours > 24) {
        $sumHours = $sumHours - 24;
    }
    $minute1 = mb_substr($time1, 3, 5);
    $minute1 = +$minute1;
    $minute2 = mb_substr($time2, 3, 5);
    $minute2 = +$minute2;
    $sumMinutes = $minute1 + $minute2;
    if ($sumMinutes > 59) {
        $sumMinutes = $sumMinutes - 60;
        $sumHours = $sumHours + 1;
    }
    $second1 = mb_substr($time1, 6, 8);
    $second1 = +$second1;
    $second2 = mb_substr($time2, 6, 8);
    $second2 = +$second2;
    $sumSeconds = $second1 + $second2;
    if ($sumSeconds > 59) {
        $sumSeconds = $sumSeconds - 60;
        $sumMinutes = $sumMinutes + 1;
    }
    return $sumHours . ":" . $sumMinutes . ":" . $sumSeconds;
}

echo sumTime($time1, $time2);
