<?php

namespace app\admin\controller;


use think\captcha\Captcha;
use think\Controller;

class Index extends Controller
{
    //重复登陆过滤
    public function  initialize()
    {
        if(session('?admin.id')){
            $this->redirect('admin/home/index');
        }
    }

    //后台登录
    public function login(){
        if (request()->isAjax()){
            $data=[
                'username'=>input('adminName'),
                'password'=>input('password'),
                'code'=>input('code'),
            ];
          $return =model('Admin')->login($data);
          if($return==1){
              //$this->success('登陆成功!','admin/home/index');
              $this->success('登陆成功!','admin/teachers/index');
          }else{
              $this->error($return);
          }
        }
        return view();
    }
    //验证码
    public function  verify(){
        $config=[
            'length'=>4,
            'useNoise'=>false,
        ];
        $captcha=new Captcha($config);
        ob_clean();
        return $captcha->entry(); //输出验证码并且保存在session中
    }

}
