<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/9
 * Time: 19:18
 */

namespace app\common\model;
use think\Model;

class Ads extends Model
{
    public static function saveInfo($data){
        if(!$data) return false;
        $validate=new \app\common\validate\Ads();
        if(!$validate->check($data)){
            return $validate->getError();
        }
        try{
        if($data['id']) $res=self::where('id',$data['id'])->update($data);
            else{
            unset($data['id']); $res=self::insert($data);
            }
        }catch (\Exception $e){
            return $e->getMessage();
        }
        return 1;
    }
    public static function getAll(){
        $res=self::alias('A')->where('A.isDel',0)->leftJoin('AdPositions P','A.adpositionId=P.positionId')->field('A.id,A.adFile,A.adName,A.adURL,A.adStartDate,A.adEndDate,A.adSort,A.adClickNum,A.positionType,P.positionName')->select();
       return $res;
    }

    public static function del($id){
        $id=','.$id.',';
        $res=model('ads')->whereIn('id',$id)->update(['isDel'=>1]);
        if($res) return 1;
        else return 0;
    }

    public static function  getInfo($id){
        $res=self::where('id',$id)->field('id,adFile,adName,adURL,adStartDate,adEndDate,adSort,positionType,adpositionId')->find();
        if(!empty($res)) return $res;
        else return 0;
    }

    public static function search($positionType,$adpositionId){
        if($adpositionId!=null) {
            $res = self::Alias('A')->where(['A.adpositionId' => $adpositionId])->where('A.isDel', 0)->field('A.id,A.adFile,A.adName,A.adURL,A.adStartDate,A.adEndDate,A.adSort,A.adClickNum,A.positionType,P.positionName')->leftJoin('AdPositions P', 'A.adpositionId=P.positionId')->select();
            if ($res)
                return $res;
            return 0;
        }else{
            $res = self::Alias('A')->where(['A.positionType' => $positionType])->where('A.isDel', 0)->field('A.id,A.adFile,A.adName,A.adURL,A.adStartDate,A.adEndDate,A.adSort,A.adClickNum,A.positionType,P.positionName')->leftJoin('AdPositions P', 'A.adpositionId=P.positionId')->select();

            if ($res)
                return $res;
            return 0;

        }
    }
}