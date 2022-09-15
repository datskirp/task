<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {
        //Using nested ternary operator to get the result
        return $inputNumber <= 10 ? 'Equal or less than 10' :
                ($inputNumber <= 20 ? 'More than 10' :
                ($inputNumber <= 30 ? 'More than 20' : 'More than 30'));
    }
}
