<?php

namespace app\index\controller;

use think\Controller;

class Test extends Controller
{
/*    public function sendEmail(){
        $res = sendEmail("2222222","937096063@qq.com","54645646@163.com");
        dump($res);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }*/
/* public  function  test(){
     $phrase  = "You should eat fruits, vegetables, and fiber every day.";
     $healthy = array("fruits", "vegetables", "fiber");
     $yummy   = array("pizza", "beer", "ice cream");

     $newphrase = str_replace($healthy, $yummy, $phrase,$count);
 echo $count;}*/

public function  test(){
 static  $a=1;
 $a=$a+1;
 return $a;
}

}
$test=new Test();
echo $test->test();
echo $test->test();
echo $test->test();


