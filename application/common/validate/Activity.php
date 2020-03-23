<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/9/28
 * Time: 16:18
 */

namespace app\common\validate;


use think\Validate;

class Activity extends Validate
{
    protected $rule =[
        'activityTitle|新闻标题'=>'require|unique:activity|max:50|min:3',
        'writer|作者'=>'require|max:20',
        'isShow|是否显示'=>'require',
        'startTime'=>'require',
        'endTime'=>'require'
    ];
    //添加场景
    public  function  sceneAdd(){
        return $this->only(['activityTitle'=>'require|max:50|min:3','writer','startTime','endTime']);
    }
    public function sceneEdit(){
        return $this->only(['activityTitle','writer','startTime','endTime']);
    }
    public function  sceneShow(){
        return $this->only(['isShow']);
}
}