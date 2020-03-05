<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/10/11
 * Time: 10:29
 */

namespace app\common\validate;
use think\Validate;
class Guests extends Validate
{
 protected  $rule=[
     'g_name|名字'=>'require|max:20',
     'g_phone|手机'=>'require|mobile',
     'g_email|邮箱'=>'require|email',
     'g_content|内容'=>'require'
     ];
 public function sceneCj(){
     return $this->only(['g_name','g_phone','g_email','g_content']);
 }
}