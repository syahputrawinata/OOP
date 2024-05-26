<?php
class Rectangle{
private $width;
private $height;

public function setWidth($widthVal) { 
    $this->width = $widthVal;}

public function setHeight($heightVal) { 
    $this->height = $heightVal;}

public function calcArea() {
return $this->height * $this->width;}

public function printData() {
$area = $this->calcArea();
echo "Area: " . $area . PHP_EOL;
}
}
$rectangle = new Rectangle();
$num1 = 3;
$num2 = 6;
$rectangle->setWidth($num1);
$rectangle->setHeight($num2);
$rectangle->printData();
?>