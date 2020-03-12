<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/11
 * Time: 19:21
 */

namespace app\admin\controller;


use app\common\model\CourseType;

class Course extends Base
{
    public function index(){
        return view();
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

    public function getMaxLevel(){
        $res=CourseType::getMaxTypeLevel();
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
        return view();
    }

    public function typeSameLevel(){

    }

    public function  test(){
        CourseType::getMaxTypeLevel();
    }
}