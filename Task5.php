<?php

namespace src;

class Task5
{
    public function main(int $num): string
    {
        if ($num <= 0) {
            throw new \InvalidArgumentException('Input number is invalid: '.$num);
        }
        $second = '1';
        $fiboSum = '1';
        while (strlen($fiboSum) < $num) {
            $first = $second;
            $second = $fiboSum;
            //making sure both strings are of the same length, fill left side with 0s if shorter
            if (strlen($second) > strlen($first)) {
                $first = str_pad($first, strlen($second), '0', STR_PAD_LEFT);
            }

            $fiboSum = $this->calcNextFibo($first, $second);
        }

        return $fiboSum;
    }

    private function calcNextFibo(string $first, string $second): string
    {
        $tempSum = '';
        $carry = 0;
        //from right to left adding both 'last' digits from both strings with carry-over calculation
        for ($i = strlen($first) - 1; $i >= 0; $i--) {
            $numFirst = (int) $first[$i];
            $numSecond = (int) $second[$i];
            $sum = $numFirst + $numSecond;
            $sumTotal = $sum + $carry;

            if ($sumTotal > 9) {
                $carry = 1;
                $sumTotal %= 10;
            } else {
                $carry = 0;
            }
            $tempSum = $sumTotal . $tempSum;
        }
        if ($carry > 0) {
            return $tempSum = $carry . $tempSum;
        }

        return $tempSum;
    }
}
