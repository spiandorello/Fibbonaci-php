<?php

namespace Fibonacci;

class Fibonacci
{
    const LAST_NUMBER = 9;

    private int $lastNumber;
    private array $fibonacci;

    public function __construct(int $lastNumber = self::LAST_NUMBER)
    {
        $this->fibonacci = [];
        $this->lastNumber = $lastNumber;
    }

    public function getSeries(): array
    {
        for ($i=0; $i < $this->lastNumber; $i++) {
            $this->fibonacci[] = $this->calcSeries($i);
        }

        return $this->fibonacci;
    }

    public function isFibonacci(int $number): bool
    {
        if (empty($this->fibonacci)) {
            throw new \Exception();
        }

        $value = array_filter($this->fibonacci, function ($item) use ($number) {
            return $item == $number;
        });

        return !empty($value);
    }

        private function calcSeries(int $num): int
    {
        if ($num <= 1) {
            return $num;
        }

        return $this->calcSeries($num - 1) + $this->calcSeries($num - 2);
    }
}