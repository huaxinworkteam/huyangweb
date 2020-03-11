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
        CourseType::getAll();
    //  return view();
    }
}