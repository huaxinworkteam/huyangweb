<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/13
 * Time: 11:14
 */

namespace app\common\model;


use think\Model;

class Course extends  Model
{
    public static function saveInfo($data){
        $validate=new \app\common\validate\Course();
        if(!$validate->check($data)){
            return $validate->getError();
        }
        if($data['id']) $res=self::where('id',$data['id'])->update($data);
        else{
            unset($data['id']);
            $res=model('Course')->insert($data);
        }
        if($res) return 1 ;
        else return 0;
    }

    public static  function  getAll(){
        $res=self::alias('C')->where(['isDel'=>0])->leftJoin('CourseType T','C.courseType=T.id')->field('C.id,C.courseName,T.typeName,C.isShow,C.startTime,C.endTime,C.mobile,C.click,C.sort')->select();
        if($res) return $res;
        else return '未查询到任何信息';
    }

    public static function del($id){
        $id=','.$id.',';
        $res=model('Course')->whereIn('id',$id)->update(['isDel'=>1]);
        if($res) return 1;
        else return 0;
    }

    public  static  function  getOne($id){
        $res=self::alias('C')->where('id',$id)->field('C.id,C.courseName,C.courseIntroduce,C.courseType,C.isShow,C.startTime,C.endTime,C.mobile,C.sort')->find();
        if($res) return $res;
        else return 0;
    }
}