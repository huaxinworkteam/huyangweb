<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/9/27
 * Time: 10:23
 */
namespace app\common\validate;

use think\Validate;


class Admin extends  Validate
{
    protected $rule=[
        'username|用户名'=>'require|min:4|max:16',
        'password|密码'=>'require|min:6|max:25',
        'nickname|昵称'=>'require|unique:admin|max:16',
        'phone|手机'=>'require|unique:admin|mobile',
        'is_super|权限'=>'require',
        'email|邮箱'=>'require|email|unique:admin',
        'code|验证码'=>'require',
    ];

    public function sceneLogin(){
        return $this->only(['username','password','code']);
    }
    public  function  sceneAdd(){
        return $this->only(['username','password','nickname','phone','is_super','email'])->append('username','unique:admin');
    }
    public function sceneEdit(){
        return $this->only(['password'=>'require|min:6|max:25','nickname'=>'require|max:16','phone'=>'require|mobile','is_super','email'=>'require|email']);
    }
}