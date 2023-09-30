<?php
//Write a PHP class 'Rectangle' that has properties for length and width. 
//Implement methods to calculate the rectangle's(l*w) area and perimeter (2*(l+w)).
class Rectangle
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function rectangles()
    {
        return $this->length * $this->width;
    }
    public function perimter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$rectObj = new Rectangle(12, 9);
echo "Area=" . $rectObj->rectangles() . PHP_EOL;
echo "Perimeter=" . $rectObj->perimter();
