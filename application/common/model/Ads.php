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
    public static function add($data){
        if(!$data) return false;

    }
    public static function getAll(){
        $res=self::alias('A')->where('A.isDel',0)->leftJoin('AdPositions P','A.adpositionId=P.positionId')->field('A.id,A.adFile,A.adName,A.adURL,A.adStartDate,A.adEndDate,A.adSort,A.adClickNum,A.positionType,P.positionName')->select();
       return $res;
    }
}