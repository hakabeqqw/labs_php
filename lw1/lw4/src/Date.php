<?php

class Date
{
    private int $day;
    private int $month;
    private int $year;
    private int $numberOfDay;

    public function __construct(string $cuttedDate)
    {
        if (!preg_match("/^[0-9,]+$/", $cuttedDate) || strlen($cuttedDate) < 5) {
            echo ("Дата неверна");
        }

        $DateArr = explode(",", $cuttedDate);
        $this->year = (int)$DateArr[2];
        $this->month = (int)$DateArr[1];

        if ($DateArr[2] % 4 !== 0 && (int)$DateArr[1] !== 2) {
            if ($DateArr[0] > 28 || $DateArr[0] < 1) {
                echo ("Введено неверное значение дня");
            }
        } else {
            $this->day = (int)$DateArr[0];
        }
    }

    public function diffDay(Date $date1, Date $date2): int
    {
        $numOfDay1 = 0;
        for ($i = 1; $i <= $date1->year; $i++) {
            if ($i === $date1->year) {
                for ($j = 1; $j < $date1->month; $j++) {
                    $numOfDay1 = $numOfDay1 + 31;
                }
                $numOfDay1 = $numOfDay1 + $date1->day;
            }
            if ($i % 4 !== 0 && $i !== $date1->year) {
                $numOfDay1 = $numOfDay1 + 365;
            } else {
                $numOfDay1 = $numOfDay1 + 366;
            }
        }
        $date1->numberOfDay = $numOfDay1;

        $numOfDay2 = 0;
        for ($i = 1; $i <= $date2->year; $i++) {
            if ($i === $date2->year) {
                for ($j = 1; $j < $date2->month; $j++) {
                    $numOfDay2 = $numOfDay2 + 31;
                }
                $numOfDay2 = $numOfDay2 + $date2->day;
            }
            if ($i % 4 !== 0 && $i !== $date2->year) {
                $numOfDay2 = $numOfDay2 + 365;
            } else {
                $numOfDay2 = $numOfDay2 + 366;
            }
        }
        $date2->numberOfDay = $numOfDay2;

        if ($numOfDay1 < $numOfDay2) {
            $change = $numOfDay2;
            $numOfDay2 = $numOfDay1;
            $numOfDay1 = $change;
        }

        $diffDay = $date1->numberOfDay - $date2->numberOfDay;
        return $diffDay;
    }

    public function minusDay(int $day): string
    {
        $tmpDay = $this->day;
        $tmpMonth = $this->month;
        $tmpYear = $this->year;

        if ($tmpDay - $day > 0) {
            $tmpDay = $tmpDay - $day;
        } else {
            while ($tmpDay - $day <= 0) {
                if ($tmpMonth - 1 > 1) {
                    $tmpDay = $tmpDay + 31;
                    $tmpMonth = $tmpMonth - 1;
                    continue;
                } else {
                    if ($tmpYear - 1 > 1) {
                        $tmpMonth = $tmpMonth + 12;
                        $tmpDay = $tmpDay + 31;
                        $tmpYear = $tmpYear - 1;
                        continue;
                    } else {
                        return "Ошибка";
                    }
                }
            }
        }
        return $tmpDay . "," . $tmpMonth . "," . $tmpYear;
    }

    public function format(string $choice): string
    {
        if ($choice === "ru") {
            return "$this->day.$this->month.$this->year";
        }

        if ($choice === "en") {
            return "$this->year,$this->month,$this->day";
        }
        return "";
    }

    public function getDateOfWeek(): string
    {
        $fullDate = ("$this->year,$this->month,$this->day");
        $dateOfWeek = new DateTime($fullDate);
        $date = (int)$dateOfWeek->format('w');
        if ($date === 0) {
            return "Понедельник";
        }

        if ($date === 1) {
            return "Вторник";
        }

        if ($date === 2) {
            return "Среда";
        }

        if ($date === 3) {
            return "Четверг";
        }

        if ($date === 4) {
            return "Пятница";
        }

        if ($date === 5) {
            return "Суббота";
        }

        if ($date === 6) {
            return "Воскресенье";
        }
    }
}

$date10 = new Date("30,4,4");
$date20 = new Date("2,3,3");
$date10->diffDay($date10, $date20);
$date10->format("ru");