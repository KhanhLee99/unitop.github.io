<?php
class Demo{
    private $attr_1;
    public function setValue($value){
        $this->attr_1  = $value; 
    }

    public function getValue(){
        return $this->attr_1;
    }
}

// $a = new Demo();
// $a->setValue(20);
// // $a-> attr_1 = 30; //attr_1 có tầm vực private nên gọi như này sẽ bị lỗi
// echo $a->getValue();

class Rectangle{
    private $width;
    private $height;

    public function getValue($w, $h){
        $this->width = $w;
        $this->height = $h;
    }
    function getArea(){
        return $this->width * $this->height;
    }
}

$rec = new Rectangle;
$rec -> getValue(2,3);
echo $rec-> getArea();