<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/13
 * Time: 20:54
 */

namespace app\admin\controller;
use app\common\model\AboutMore as AboutMoreModel;

class AboutMore extends Base
{
        public function index(){
            if(request()->isAjax()){
                $res=AboutMoreModel::getAll();
                if($res) return myJson('T',$res);
                else return myJson('F','未获取任何数据');
            }
            return view();
        }

        public function  edit(){
            $id=input('id');
            if(request()->isAjax()){
                $res=AboutMoreModel::getOne($id);
                if($res) return myJson('T',$res);
                else return myJson('F','获取数据失败');
            }
            $this->assign('id',$id);
            return view();
        }

        public function saveInfo(){
            $data=[
              'id'=>input('id')? input('id'):'',
            'name'=>input('name'),
             'content'=>input('content'),
                'isShow'=>input('isShow'),
                'sort'=>input('sort'),
                'updateTime'=>time()
            ];
            $res=AboutMoreModel::saveInfo($data);
            if($res===1) return myJson('T','保存成功');
            else return myJson('F',$res);
        }
        public  function  add(){
            return view();
        }

        public  function del(){
            $id=input('id');
            $res=AboutMoreModel::del($id);
            if($res) return myJson('T','删除成功');
            else return myJson('F','删除失败');
        }

        public  function shiftShow(){
            $id=input('id');
            $res=AboutMoreModel::shiftShow($id);
            if($res) return myJson('T','修改成功');
            return myJson('F','修改失败');
        }
}