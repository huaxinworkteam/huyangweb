<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/11
 * Time: 20:41
 */

namespace app\common\model;


use think\Model;

class CourseType extends Model
{
    private static $tree = [];
    private static $record='';
    //从指定集合中卸下某一元素 ,成功则返回集合，否则返回false
    public static function setOff($set, $element)
    {
        $bool = -1;
        $array = explode(',', $set);
        foreach ($array as $k => $v) {
            if ($v == $element) {
                $bool = $k;
                break;
            }
        }
        if ($bool != -1) {
            unset($array[$k]);
            return implode(',', $array);
        } else return false;
    }

    //从指定集合中装上某一元素,成功则返回集合，否则返回false
    public static function setOn($set, $element)
    {
        $bool = true;
        $array = explode(',', $set);
        foreach ($array as $k => $v) {
            if ($v == $element) {
                $bool = false;
                break;
            }
        }
        if (!$bool) return false;
        else return $set . ',' . $element;
    }

    public static function findAllSons($id,$field='*'){

    }

    //TODO 寻找该层极其所有孩子们,调用完必须清空树,field必须有nextId,lastId
 /*   public static function findAllSons($typeLevel = 1, $field = '*'){
       // self::$startlevel=$typeLevel;
        $arr=self::where(['isDel'=>0,'typeLevel'=>$typeLevel])->whereIn('lastId',self::$record)->field($field)->select()->toArray();
        $size=sizeof($arr);
        for($i=0;$i<$size;$i++){
           array_push(self::$tree,json_encode(['typeLevel'=>$typeLevel,'data'=>$arr[$i]]));
           self::$record.=$arr[$i]['id'].',';
            if($arr[$i]['nextId']==null&&($i+1)==$size)
            {
                $typeLevel-=1;
            }
            if($arr[$i]['nextId']!=null)
            {
                $typeLevel+=1;
                self::findAllSons($typeLevel,$field);
            }
        }

        return json_encode(self::$tree);
    }*/

    //获取全表信息
    public static function getAll()
    {
        $field = 'id,typeName,sort,nextId,lastId';
        $aa = self::findAllSons(1, $field);
        $bb = json_decode($aa, true);
        halt($bb);
    }

    //获取指定信息
    public static function getOne($id)
    {

    }

    //保存信息
    public static function saveInfo($data)
    {

    }

    //删除指定信息或信息集
    public static function del($id)
    {

    }
}