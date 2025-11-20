<?php

namespace App;

class Vector
{
    public function __construct(public float $x = 0, public float $y = 0) 
    {
    }

    public function length(): float
    {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    public function isZero(): bool
    {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo(Vector $other): bool
    {
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }

    public function __toString(): string
    {
        return "Vector({$this->x}, {$this->y})";
    }
}
