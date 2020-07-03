<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/17 0017
 * Time: 上午 11:42
 */

namespace app\admin\controller;
use app\common\model\Config as ConfigModel;

class Config extends  Base
{
    public function  index(){
     if(request()->isAjax()){
         $res=ConfigModel::getAll();
         if(is_object($res)) return myJson('T',$res);
         else return myJson('F',$res);
     }
     return view();
    }

    public  function  add(){
        return view();
    }

    public function  saveInfo(){
        $data=[
          'id'=>input('id'),
          'QQ'=>input('QQ'),
          'kefuLink'=>input('kefuLink'),
          'email'=>input('email'),
          'mobile'=>input('mobile'),
          'username'=>input('username'),
            'updateTime'=>time()
        ];
        $res=ConfigModel::saveInfo($data);
        if($res==1) return myJson('T','保存成功');
        else return myJson('F',$res);
    }
    public  function  edit(){
        $id=input('id');
        if(request()->isAjax()){
            $res=ConfigModel::getOne($id);
            if(is_object($res)) return myJson('T',$res);
            else return myJson('F',$res);
        }
        $this->assign('id',$id);
        return view();
    }

    public function  del(){
        $id=input('id');
        $res=ConfigModel::del($id);
        if($res) return myJson('T','删除成功');
        else return myJson('F','删除失败');
    }
}