<?php

namespace App;

class Point
{
    public function __construct(public float $x = 0, public float $y = 0) 
    {
    }

    public function move(float $dx, float $dy): void
    {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function __toString(): string
    {
        return "Point({$this->x}, {$this->y})";
    }
}
