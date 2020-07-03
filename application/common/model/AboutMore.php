<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/13
 * Time: 20:27
 */

namespace app\common\model;


use think\Model;

class AboutMore extends Model
{


    public static function saveInfo($data){
            $validate=new \app\common\validate\AboutMore();
            if($data['id']){
            if(!$validate->scene('edit')->check($data)){

                return $validate->getError();
            }}
            else{
                if(!$validate->check($data)){

                    return $validate->getError();
                }
            }

            try {
                if ($data['id']) {
                    $res = self::where('id', $data['id'])->update($data);
                } else {
                    unset($data['id']);
                    $res = model('AboutMore')->insert($data);
                }
            }catch (\Exception $e){
                return $e->getMessage();
            }
            return 1;

    }

    public static function getAll(){
       $res=self::where(['isDel'=>0])->field('id,name,isShow,sort,isIndex')->order('isIndex desc,sort desc')->select();
       if($res)
       return $res;
       else return 0;
    }

    public static function getOne($id){
        $res=self::where('id',$id)->field('id,name,content,isShow,sort,isIndex')->find();
        if($res) return $res;
        return 0;
    }

    public static function del($id){
        $id=','.$id.',';
        $res=model('AboutMore')->whereIn('id',$id)->update(['isDel'=>1]);
        if($res) return 1;
        else return 0;
    }

    public  static  function  shiftShow($id){
        $isShow=input('isShow')?0:1;
        $res=self::where('id',$id)->update(['isShow'=>$isShow]);
        if($res) return 1;
        else return 0;
    }
}