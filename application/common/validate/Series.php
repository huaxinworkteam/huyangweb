<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/10/12
 * Time: 14:00
 */

namespace app\common\validate;


use think\Validate;

class Series extends Validate
{
   protected $rule=[
       'series|院系名称'=>'require|unique:series'
   ];
   public function sceneAdd(){
       return $this->only(['series']);
   }
}