<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (empty($arr) or count($arr) < 2) {
            throw new \InvalidArgumentException('Method main only accepts arrays with 2 or more elements.');
        }

        unset($arr[$position]);

        return [...$arr];
    }
}
