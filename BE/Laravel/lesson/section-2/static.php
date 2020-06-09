<?php
class Rectangle{
    public static $width;
    public static  $height;

    public static function getPerimeter(){
        return 2*(self::$width + self::$height);
    }

    public static function getArea(){
        return (self::$width * self::$height);
    }
} 

class Demo{
    function __construct()
    {
        Rectangle::$width = 10;
        Rectangle::$height = 22;
        echo "Chu vi: ".Rectangle :: getPerimeter()."</br>";
        echo "Dien tich: ".Rectangle :: getArea()."</br>";
    }
}

$demo = new demo;
?>