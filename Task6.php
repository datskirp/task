<?php

namespace src;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        //validating dates with a function
        if (!$this->validateDates($year, $lastYear, $month, $lastMonth)) {
            throw new \InvalidArgumentException('Invalid input dates.');
        }
        $months = range(1, 12, 1);
        $cnt = 0;
        //$arr = [];

        for ($i = $lastYear; $i <= $year; $i++) {
            foreach ($months as $currentMonth) {
                if ($i == $lastYear and $currentMonth < $lastMonth) {
                    continue;
                }
                $date = date_create('01-' . $currentMonth . '-' . $i);

                if (date_format($date, 'l') == $day) {
                    $cnt++;
                    //$arr[] = date_format($date, "d-m-Y l");
                }
                if ($i == $year and $month == $currentMonth) {
                    break;
                }
            }
        }

        return $cnt;
    }

    private function validateDates(int $year, int $lastYear, int $month, int $lastMonth): bool
    {
        if ($month <= 0 or $month > 12) {
            return false;
        } elseif ($lastMonth <= 0 or $lastMonth > 12) {
            return false;
        } elseif ($year <= 0 or $lastYear < 1000) {
            return false;
        } elseif ($year < $lastYear or ($year == $lastYear and $month < $lastMonth)) {
            return false;
        } else {
            return true;
        }
    }
}
