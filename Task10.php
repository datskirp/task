<?php

namespace src;

class Task10
{
    public function main(int $input): array
    {
        if ($input <= 0) {
            throw new \InvalidArgumentException('Method main only accepts positive integers. Input was: '.$input);
        }
        $result = [];
        while ($input > 1) {
            $result[] = $input;
            //checking for odd or even can also be done through
            //modulus operator %
            $input = $input & 1 ? $input * 3 + 1 : $input / 2;
        }
        $result[] = 1;

        return $result;
    }
}
