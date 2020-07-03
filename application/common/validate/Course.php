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
      'courseName'=>'require|unique:Course',
        'courseType'=>'require',
        'startTime'=>'require',
        'endTime'=>'require'
    ];
    public function sceneEdit(){
        return $this->only(['courseName'=>'require|unique:Course',
            'courseType'=>'require',
            'startTime'=>'require',
            'endTime'=>'require']);
    }
}