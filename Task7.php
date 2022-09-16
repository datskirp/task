<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (!$this->validateInput($arr, $position)) {
            throw new \InvalidArgumentException('Invalid input');
        }

        unset($arr[$position]);

        return [...$arr];
    }

    private function validateInput(array $arr, int $position): bool
    {
        if (empty($arr) or count($arr) < 2) {
            return false;
        } elseif ($position < 0 or count($arr) <= $position) {
            return false;
        } else {
            return true;
        }
    }
}
