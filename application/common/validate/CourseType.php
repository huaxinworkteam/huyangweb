<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/12
 * Time: 15:50
 */

namespace app\common\validate;


use think\Validate;

class CourseType extends Validate
{
    protected   $rule=[
        'typeName|类名'=>'require|unique:course_type',
        'lastId|上级分类id'=>'require',
        ];
}