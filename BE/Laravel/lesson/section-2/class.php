<?php
class Rectangle{
    public $width = 20;
    public  $height = 10;

    public function getPerimeter(){
        return 2*($this->width + $this->height);
    }

    public function getArea(){
        return ($this->width * $this->height);
    }
} 

$a = new Rectangle;
$a -> width = 4;
$a -> height = 5;
echo "Chu vi: ".$a -> getPerimeter()."</br>";
echo "Dien tich: ".$a -> getArea()."</br>";
?>