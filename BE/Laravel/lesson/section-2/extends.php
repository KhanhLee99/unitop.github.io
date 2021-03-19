<?php 
class A{
    public $attr_1 = 10;

    public function method_1(){
        echo "OK";
    }
}
class B extends A{
    public $attr_2;
    public function method_2()
    {
        return $this -> attr_2;
    }

    public function method_3()
    {
        return $this -> attr_1;
    }
}
$b = new b();
$b -> attr_2 = "class B";
$b -> method_1();           // OK
echo $b -> method_3();      // 10
echo $b -> method_2();     // class B
?>