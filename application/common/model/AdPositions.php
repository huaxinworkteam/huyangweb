<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/9
 * Time: 19:19
 */

namespace app\common\model;
use think\Model;

class AdPositions extends  Model
{
    protected $pk='positionId';

    public static function add($data){
        if(!$data) return false;
        $validate =new \app\common\validate\AdPositions();
        if(!$validate->check($data)){
            return $validate->getError();
        }
        if($data['positionId']) $res=self::where('positionId',$data['positionId'])->update($data);
     else  {unset($data['positionId']); $res=model('AdPositions')->insert($data);}
        if($res){
            return 1;
        }else{
            return '发送失败';
        }

    }

    public static function del($id){
        $id=','.$id.',';
        $res=model('AdPositions')->whereIn('positionId',$id)->update(['isDel'=>1]);
        if(!$res) return false;
        return 1;
    }

    public static function getInfo($id){
        $res=self::where('positionId',$id)->field('positionId,positionType,positionName,positionCode,positionWidth,positionHeight,apSort')->find();
        if(empty($res)) return false;
        return $res;
    }

    public static function getAll(){
        $res=self::where('isDel',0)->field('positionId,positionName,positionWidth,positionHeight,positionType,positionCode')->select();
        return $res;
    }

    public static function getPosition($positionType){
        $res=self::where(['positionType'=>$positionType,'isDel'=>0])->order('apSort desc')->field('positionId,positionName')->select();
        return $res;
    }

    public static function search($positionType=null,$positionCode=null){
        if($positionType==null && $positionCode==null) return 0;
        if($positionType&&$positionCode) {
            $res = self::where('isDel', 0)->where(['positionType'=>$positionType,'positionCode'=>$positionCode])->field('positionId,positionName,positionWidth,positionHeight,positionType,positionCode')->select();
            if ($res)
                return $res;
            else return 0;
        }
        if($positionType==null &&$positionCode!=null){
            $res = self::where('isDel', 0)->where(['positionCode'=>$positionCode])->field('positionId,positionName,positionWidth,positionHeight,positionType,positionCode')->select();
            if ($res)
                return $res;
            else return 0;
        }
        if($positionType!=null &&$positionCode==null){
            $res = self::where('isDel', 0)->where(['positionType'=>$positionType])->field('positionId,positionName,positionWidth,positionHeight,positionType,positionCode')->select();
            if ($res)
                return $res;
            else return 0;
        }
    }
}