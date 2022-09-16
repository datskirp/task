<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): array
    {
        if (!$this->validateInput($arr, $number)) {
            throw new \InvalidArgumentException('Invalid input');
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
    private function validateInput(array $arr, int $number): bool
    {
        if (empty($arr) or count($arr) < 3) {
            return false;
        } elseif ($number <= 0) {
            return false;
        } elseif (min($arr) < 0) {
            return false;
        } else {
            return true;
        }
    }
}
