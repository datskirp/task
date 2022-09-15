<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        if (empty($input)) {
            throw new \InvalidArgumentException('Method main only accepts non empty strings.');
        }
        $input = strtolower($input);
        $needles = ['_', '-'];
        $input = str_replace($needles, ' ', $input);

        return str_replace(' ', '', ucwords($input));
    }
}
