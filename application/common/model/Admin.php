<?php

namespace app\common\model;
use think\Model;
use think\model\concern\SoftDelete;

class Admin extends Model
{
    //软删除
    use SoftDelete;
    //登陆校验
    public function login($data)
    {
        $validate = new \app\common\validate\Admin();
        if (!$validate->scene('login')->check($data)) {
            return $validate->getError();
            if(!captcha_check($data['code'])){
                return "验证码错误";
            }
        }
        $result = $this->where('username',$data['username'])->find();
        if ($result) {
            //1表示用户名密码正确
            if ($result['status'] != 1) {
                return '此用户被禁用';
            }
            $sessionData = [
                'id' => $result['id'],
                'username'=>$result['username'],
                'nickname' => $result['nickname'],
                'is_super'=>$result['is_super'],
                'create_time'=>$result['create_time']
            ];
            session('admin',$sessionData);
            return 1;
        } else {
            return '用户名或者密码错误';
        }
    }

    //添加管理员
    public function  add($data){
        $validate=new \app\common\validate\Admin();
        if(!$validate->scene('add')->check($data)){
            return $validate->getError();
        }
        $result=$this->allowField(true)->save($data);
        if($result){
            return 1;
        }else{
            return '管理员添加失败';
        }
    }
    //管理员编辑
    public function edit($data){
        $validate=new \app\common\validate\Admin();
        if(!$validate->scene('edit')->check($data)){
            return $validate->getError();
        }
        $admininfo=$this->find($data['id']);
        $admininfo->password=$data['password'];
        $admininfo->nickname=$data['nickname'];
        $admininfo->is_super=$data['is_super'];
        $admininfo->phone=$data['phone'];
        $admininfo->email=$data['email'];
        $result=$admininfo->save();
        if($result){
            return 1;
        }else{
            return '保存失败';
        }
    }

}
