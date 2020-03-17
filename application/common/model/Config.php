<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/17 0017
 * Time: 上午 11:43
 */

namespace app\common\model;


use think\Model;

class Config extends Model
{
        public  static  function  getAll(){
            try {
                $res = self::where('isDel', 0)->field('id,QQ,kefuLink,email,mobile,username')->select();
                return $res;
            }catch (\Exception $e){
                return $e->getMessage();
            }
        }

        public  static  function  getOne($id){
            try{
                $res=self::where('id',$id)->field('id,QQ,kefuLink,email,mobile,username')->find();
                if($res)
                return $res;
            }catch (\Exception $e){
                return $e->getMessage();
            }
            return '无数据';
        }

        public static function del($id){
            $id=','.$id.',';
            $res=model('Config')->whereIn('id',$id)->update(['isDel'=>1]);
            if($res) return 1;
            else return 0;
        }

        public static  function  saveInfo($data){
            $validate = new \app\common\validate\Config();
            if(!$validate->check($data)){
                return $validate->getError();
            }
            try{
                if($data['id']){
                    self::where('id',$data['id'])->update($data);
                }else{
                    model('Config')->save($data);
                }
                return 1;
            }catch (\Exception $e){
                return $e->getMessage();
            }
            return 0;
        }
}