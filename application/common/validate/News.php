<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/9/28
 * Time: 16:18
 */

namespace app\common\validate;


use think\Validate;

class News extends Validate
{
    protected $rule =[
        'newstitle|新闻标题'=>'require|unique:news|max:50|min:3',
        'writer|作者'=>'require|max:20',
        'articleContent|内容'=>'require',
        'isShow|是否显示'=>'require',
    ];
    //添加场景
    public  function  sceneAdd(){
        return $this->only(['newstitle','writer','articleContent']);
    }
    public function sceneEdit(){
        return $this->only(['newstitle'=>'require|max:50|min:3','writer','articleContent']);
    }
    public function  sceneShow(){
        return $this->only(['isShow']);
}
}