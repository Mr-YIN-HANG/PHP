<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/13
 * Time: 14:27
 */

class Car
{
    var $color;
    function Car($color="green"){
        $this ->color =$color;
    }
    function what_color(){
        return $this->color;
    }
}
$c = new Car();
$c1 = new Car('red');
echo $c -> what_color();
echo $c1 ->what_color();