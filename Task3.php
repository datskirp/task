<?php

namespace src;

class Task3
{
    public function main(int $num): int
    {
        //validate if input integer > 0 and at least 2 digits long
        if ($num < 10) {
            throw new \InvalidArgumentException('Method main only accepts integers >= 10. Input was: '.$num);
        }
        //splitting input number into an array
        $arr = str_split((string)$num);
        //Looping until there's only one digit left
        while (count($arr) > 1) {
            //Changing data type of the array to integer
            $arr = array_map('intval', $arr);
            //calculating the sum of the $arr array and feeding it to str_split function
            $arr = str_split((string)array_sum($arr));
        }

        return (int) $arr[0];
    }
}
