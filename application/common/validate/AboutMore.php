<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/13
 * Time: 21:13
 */

namespace app\common\validate;


use think\Validate;

class AboutMore extends Validate
{
 protected $rule=[
   'name'=>'require|unique:about_more',
     'isShow'=>'require'
 ];
}