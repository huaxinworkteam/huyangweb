<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/11
 * Time: 19:21
 */

namespace app\admin\controller;

use app\common\model\Course as CourseModel;
use app\common\model\CourseType;
use think\config\driver\Json;

class Course extends Base
{
    public function index(){
        if(request()->isAjax()){
            $courseName=input('courseName')?input('courseName'):null;
           $res= CourseModel::getAll($courseName);
           if(is_array($res)) return myJson('T',$res);
           else  return myJson('F',$res);
        }
        return view();
    }

    public  function  add(){

        return view();
    }

    public  function  del(){
        $id = input('id');
        $res=CourseModel::del($id);
        if($res) return myJson('T','删除成功');
        else return myJson('F','删除失败');
    }
    public  function  edit(){
        $id=input('id');
        if(request()->isAjax()){
            $res=CourseModel::getOne($id);
            if($res) return myJson('T',$res);
            else return myJson('F','获取数据失败');
        }

         $this->assign('id',$id);
        return view();
    }

    public function  saveInfo(){
        $data=[
            'id'=>input('id'),
            'courseName'=>input('courseName'),
            'courseType'=>input('courseType'),
            'updateTime'=>time(),
            'startTime'=>input('startTime'),
            'endTime'=>input('endTime'),
            'isShow'=>input('isShow')?input('isShow'):0,
            'mobile'=>input('mobile'),
            'courseIntroduce'=>input('courseIntroduce'),
            'sort'=>input('sort')?input('sort'):0
        ];
        $res=CourseModel::saveInfo($data);
        if($res===1) return myJson('T','保存成功');
        else return myJson('F',$res);
    }

    public  function  shiftShow(){
        $id=input('id');
        $res=CourseModel::shiftShow($id);
        if($res) return myJson('T','修改成功');
        else return myJson('F','操作失败');
    }

    //=======================以下是课程分类方法=========================================

    public  function  courseType(){
        $typeLevel = input('typeLevel') ? input('typeLevel') : 1;
        if(request()->isAjax()) {
            $res = CourseType::getFriends($typeLevel);
            if ($res) return myJson('T',$res);
            else return myJson('F');
        }
        return view();
    }
    public function getSons(){
        $id=input('id');
        $res=CourseType::getNextSons($id);
        if($res) return myJson('T',$res);
        else return myJson('F');
    }

    public function getAllTypeLevel(){
        $res=CourseType::getAllTypeLevel();
        if($res) return myJson('T',$res);
        else return myJson('F');
    }

    public function typeEdit(){
        $id=input('id');
        if(request()->isAjax()){
            $res=CourseType::getOne($id);
            if($res) return myJson('T',$res);
            else return myJson('F');
        }
        $this->assign('id',$id);
        return view();
    }

    public function typeAdd(){

        return view();
    }
    public  function typeSave(){
        $data=[
            'id'=>input('id'),
            'typeName'=>input('typeName'),
            'lastId'=>input('lastId')?input('lastId'):0,
            'updateTime'=>time(),
            'sort'=>input('sort')
        ];
        $res=CourseType::saveInfo($data);
        if($res===1) return  myJson('T');
        else   return myJson('F',$res);
    }

    public  function  typeDel(){
        $id=input('id');
        $res=CourseType::del($id);
        if($res==1) return myJson('T');
        else return myJson('F');
    }

    public function CLDepth(){
        $res=CourseType::getDepth();
        if($res) return myJson('T',$res);
        else return myJson('F','获取数值失败');
    }
    public function  test(){
       CourseModel::getAll();
    }
}