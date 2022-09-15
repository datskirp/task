<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        if (empty($arr) or count($arr) < 3) {
            throw new \InvalidArgumentException('Input array must not be empty or have less than 3 elements');
        }
        $result = [];
        $answer = [];
        for ($i = 0; $i < count($arr) - 2; $i++) {
            if (array_sum(array_slice($arr, $i, 3)) == $number) {
                $result[] = $i;
            } else {
                continue;
            }
        }
        // Concatenating answer statement from input array
        foreach ($result as $item) {
            $answer[] = $arr[$item] . ' + ' . $arr[$item + 1] . ' + ' . $arr[$item + 2] . ' = ' . $number;
        }

        return $answer;
    }
}
