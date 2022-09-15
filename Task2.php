<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        //feed input date string to validation function
        //if format is wrong - Exception is thrown
        if (!$this->validateDate($date)) {
            throw new \InvalidArgumentException('Method main only accepts dates of correct
                                                format. Input was: '.$date);
        }
        //creating DateTime object that holds day and month of input birthday date + current year
        $bd_now = date_create(substr($date, 0, 6) . date('Y'));
        //creating DateTime object that holds today's date at midnight
        $dateNow = date_create('today midnight');
        //Checking if birthday has already passed, today or still to come this year
        if ($bd_now < $dateNow) {
            //getting the difference between two DateTime objects (birthday date and today's date)
            $interval = date_diff($dateNow, date_modify($bd_now, '+1 year'));

            return (int) $interval->format('%a');
        } elseif ($bd_now > $dateNow) {
            $interval = date_diff($dateNow, $bd_now);

            return (int) $interval->format('%a');
        } else {
            //birthday is today!
            return 0;
        }
    }

    private function validateDate(string $date, string $format = 'd-m-Y'): object|false
    {
        //create a new DateTime object using specified format
        //if object can't be created because of wrong input return false
        if (!$checkDate = date_create_from_format($format, $date)) {
            return false;
        }

        //check if birthday date not in the future
        if ($checkDate->format('Y') > date('Y')) {
            return false;
        }

        // If input date doesn't match our format, we return false
        // returns DateTime object if matches
        if ($checkDate->format($format) === $date) {
            return $checkDate;
        } else {
            return false;
        }
    }
}
