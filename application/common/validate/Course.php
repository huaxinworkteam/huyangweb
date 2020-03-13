<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/13
 * Time: 11:08
 */

namespace app\common\validate;


use think\Validate;

class Course extends  Validate
{
    protected $rule = [
      'courseName'=>'require',
        'courseType'=>'require',
        'startTime'=>'require',
        'endTime'=>'require'
    ];
}