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
       $validate=new \app\common\model\Xetzhuanlan();
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
            self::insert($data);
            return 1;
        }
    }

    public function getOneInfo($id){
        $res=self::where('id',$id)->find();
        if($res) return $res;
        else return 0;
    }

    public function  getAllInfo(){
        $res=self::where('is_del',0)->select();
        return $res;
    }
}