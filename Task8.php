<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        $result = json_decode($json, true);
        if ($result == null or is_numeric($json)) {
            throw new \InvalidArgumentException('Method main accepts only valid json format.');
        }
        $str = '';
        //creating an anonymous function to hold information in a string
        $func = function ($item, $key) use (&$str) {
            $str .= $key . ': ' . $item . "\r\n";
        };
        array_walk_recursive($result, $func);

        return rtrim($str);
    }
}
