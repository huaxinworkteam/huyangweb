<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/5
 * Time: 19:20
 */

namespace app\common\validate;


use think\facade\Validate;

class Gallery extends  Validate
{
    protected $rule=[
    'webno|webno未选择'=>'require',
        'path|未获取图片路径'=>'require',
    ];

    public  function sceneAdd(){
        return $this->only(['webno','path']);
    }
}