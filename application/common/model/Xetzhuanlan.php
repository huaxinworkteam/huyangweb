<?php
/**
 * Created by PhpStorm.
 * User: 93709
 * Date: 2020/3/24
 * Time: 14:36
 */

namespace app\common\model;


use think\Model;

class Xetzhuanlan extends Model
{
    public static  function saveInfo($data){
       $validate=new \app\common\validate\Xetzhuanlan();
        if($data['id']){
            if(!$validate->scene('edit')->check($data)){
                return $validate->getError();
            }
            self::where('id',$data['id'])->update($data);
            return 1;
        }else{
            if(!$validate->check($data)){
                return $validate->getError();
            }
            unset($data['id']);
            self::insert($data);
            return 1;
        }
    }

    public static function getOneInfo($id){
        $res=self::where('id',$id)->find();
        if($res) return $res;
        else return 0;
    }

    public static function  getAllInfo(){
        $res=self::where('is_del',0)->select();
        return $res;
    }

    public static function del($id){
        $id=','.$id.',';
        $res=model('xetzhuanlan')->whereIn('id',$id)->update(['is_del'=>1]);
        if($res) return 1;
        else return 0;
    }
}