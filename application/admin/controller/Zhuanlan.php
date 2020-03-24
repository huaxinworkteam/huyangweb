<?php
/**
 * Created by PhpStorm.
 * User: 93709
 * Date: 2020/3/24
 * Time: 16:04
 */

namespace app\admin\controller;

use app\common\model\Xetzhuanlan;

class Zhuanlan extends Base
{
    public  function add(){
        return view();
    }

    public function index(){
        if(request()->isAjax()) {
            $res=Xetzhuanlan::getAllInfo();
            return myJson('T',$res);
        }
        return view();
    }
    public function  edit(){
        $id=input('id');
        if(request()->isAjax()){
            $res=Xetzhuanlan::getOneInfo($id);
            if($res) return myJson('T',$res);
            else return myJson('F','获取数据失败');
        }
        $this->assign('id',$id);
        return view();
    }
    public function  del(){
        $id=input('id');
        $res=Xetzhuanlan::del($id);
        if($res) return myJson('T','删除成功');
        else return myJson('F','删除失败');
    }

    public  function  saveInfo(){
        $data=[
            'id'=>input('id'),
            'goods_id'=>input('goods_id'),
            'goods_name'=>input('goods_name'),
            'goods_type'=>input('goods_type')
        ];
        $res=Xetzhuanlan::saveInfo($data);
        if($res===1) return myJson('T','保存成功');
        else return myJson('F',$res);
    }

}