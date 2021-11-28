<?php
class First{
    public $a=9;
    function __construct()
    {
        echo "constructor called"."<br>";
    }
    function m1(){
        $a=89;
        echo "m1 called";
        echo $this->a."<br>";
        echo $a;
    }
}
class f2 extends First{

}
$f= new f2();
$f->m1();
?>