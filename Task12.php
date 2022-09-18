<?php

namespace src;

class Task12
{
    private int $firstNumber;
    private int $secondNumber;
    private int $result;

    public function __construct(int $firstNumber, int $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function add()
    {
        $this->result = $this->firstNumber + $this->secondNumber;

        return $this;
    }

    public function subtract()
    {
        $this->result = $this->firstNumber - $this->secondNumber;

        return $this;
    }

    public function multiply()
    {
        $this->result = $this->firstNumber * $this->secondNumber;

        return $this;
    }

    public function divide()
    {
        if ($this->secondNumber == 0) {
            throw new \InvalidArgumentException('Cannot divide by zero');
        }
        $this->result = $this->firstNumber / $this->secondNumber;

        return $this;
    }

    public function addBy(int $number)
    {
        $this->result += $number;

        return $this;
    }

    public function subtractBy(int $number)
    {
        $this->result -= $number;

        return $this;
    }

    public function divideBy(int $number)
    {
        if ($number == 0) {
            throw new \InvalidArgumentException('Cannot divide by zero');
        }
        $this->result /= $number;

        return $this;
    }

    public function multiplyBy(int $number)
    {
        $this->result *= $number;

        return $this;
    }

    public function __toString()
    {
        return strval($this->result);
    }
}
