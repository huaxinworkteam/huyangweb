<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/17 0017
 * Time: 下午 12:38
 */

namespace app\common\validate;


use think\Validate;

class Config extends Validate
{
    protected  $rule=[
        'username|客服名'=>'require',
        'kefuLink|客服链接'=>'require',
        'email|邮箱'=>'require|unique:config|email',
        'mobile|手机'=>'require|unique:config|mobile',
        ];

    public  function sceneEdit(){
        return $this->only($this->rule);
    }
}