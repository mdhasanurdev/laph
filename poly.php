<?php

interface Shape
{
    public function area();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo $circle->area();

echo PHP_EOL;

$rectangle = new Rectangle(4, 6);
echo $rectangle->area();