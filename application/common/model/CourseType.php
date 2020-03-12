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
    private static $record=[];
    private static $lock=0;
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
//遍历一个id的所有子节点
    public static function findAllSons($id,$field='*'){
            $res=self::where(['id'=>$id,'isDel'=>0])->field($field)->find();
            if(!$res&&self::$record==[]) return 1;
            array_push(self::$tree,json_encode(['typeLevel'=>$res['typeLevel'],'data'=>$res]));
            array_push(self::$record,$id);
            if($res&&self::$record!=[]){
                if($res['nextId']!=null){
                    $tmpArray=explode(',',$res['nextId']);
                    $size=sizeof($tmpArray);
                    for($i=0;$i<$size;$i++){
                        self::findAllSons($tmpArray[$i],$field);
                    }
                }else{
                    array_pop(self::$record);
                }
            }
            return 1;
    }


    //获取全表信息
    public static function getAll($typeLevel=1)
    {
        $field = 'id,typeName,typeLevel,nextId';
        $res=self::where(['isDel'=>0,'typeLevel'=>$typeLevel])->field('id')->select()->toArray();
        $error=0;
        self::$lock+=1;
        if(self::$lock===1){
        foreach ($res as $k => $v) {
            $aa = self::findAllSons($v['id'], $field);
            if($aa!==1) {$error=1;break;}
        }
        if($error==0){
        $bb = json_encode(['code'=>1,'message'=>'success','data'=>self::$tree]);
            self::$tree=[];
            self::$lock-=1;
        return $bb;}
        else {
            self::$tree=[];
            self::$lock-=1;
            return 0;
        }}else{
            return 0;
        }

    }

    //获取指定信息
    public static function getOne($id)
    {
     //  self::where(['id'=>$id])->field('id,typeName')

    }

    //保存信息
    public static function saveInfo($data)
    {

    }

    //删除指定信息或信息集
    public static function del($id)
    {

    }

    public static  function getMaxTypeLevel(){
        $res=self::where(['isDel'=>0])->field('typeLevel')->order('typeLevel desc')->find();
        if($res) return $res['0'];
        else return 0;
    }
}