<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/10/8
 * Time: 11:01
 */

namespace app\common\validate;


use think\Validate;

class Teachers extends Validate
{
    protected $rule=[
        'teachername|教师名称'=>'require|unique:teachers|max:10',
        'isShow|是否显示'=>'require',
        'seriesNO|院系'=>'require',
        'teacherdescription|教师描述'=>'require'
    ];
    public function  sceneAdd(){
        return $this->only(['teachername','seriesNO','teacherdescription']);
    }
    public function  sceneShow(){
        return $this->only(['isShow']);
    }
    public function  sceneEdit(){
        return $this->only(['teachername|教师名称'=>'require|max:10','isShow','seriesNO','teacherdescription']);
    }
}