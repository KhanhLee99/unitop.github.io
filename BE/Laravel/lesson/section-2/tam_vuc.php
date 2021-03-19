<?php
class A{
    private $attr_1 = 10;
    protected $attr_2 = 20;
}

class B extends A{
    public function __construct(){
        echo $this->attr_1; // lỗi do attr_1 có tầm vực private
        echo $this->attr_2;
    }
}

new B;