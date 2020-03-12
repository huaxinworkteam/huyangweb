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
    public static function setOn($id, $element)
    {
        $bool = true;
        $sql=self::where(['id'=>$id])->field('nextId')->find();
        $set=$sql['nextId'];
        $array = explode(',', $set);
        foreach ($array as $k => $v) {
            if ($v == $element) {
                $bool = false;
                break;
            }
        }
        if (!$bool) return false;
        else try {
           self::where(['id'=>$id])->update(['nextId'=>$set . ',' . $element]);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
//遍历一个id的所有子节点
/*    public static function findAllSons($id,$field='*'){
            $res=self::where(['id'=>$id,'isDel'=>0])->field($field)->find();
            if(!$res&&self::$record==[]) return 1;
            array_push(self::$tree,['typeLevel'=>$res['typeLevel'],'data'=>$res]);
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
    }*/


    //获取全表信息
/*    public static function getAll($typeLevel=1)
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
        $bb = json_encode(self::$tree);
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

    }*/

    //获取指定信息
    public static function getOne($id)
    {
      $res=self::where(['id'=>$id])->field('id,typeName,lastId,sort')->find();
      if($res) return $res;
      else return 0;

    }

    //保存信息
    public static function saveInfo($data)
    {
        $validate=new \app\common\validate\CourseType();
        if($validate->check($data)){
            return $validate->getError();
        }
        if($data['lastId']!=0){
            $father=self::where('id',$data['lastId'])->field('typeLevel')->find();
            if($father)
            $data['typeLevel']=$father['typeLevel']+1;
            else return false;
        }else{
            $data['typeLevel']=1;
        }
        if($data['id']) {
           try {
                self::where('id', $data['id'])->update($data);
                if($data['lastId']!=0)
                self::where('id', $data['lastId'])->update(['nextId' => self::setOn($data['lastId'], $data['id'])]);
           }catch (\Exception $e){
               return $e->getMessage();
           }
        }else{
            unset($data['id']);
            try{
                self::insert($data);
                if($data['lastId']!=0)
                self::where('id',$data['lastId'])->update(['nextId' => self::setOn($data['lastId'], $data['id'])]);
            }catch (\Exception $e){
                return $e->getMessage();
            }
        }
            return 1;
    }

    //删除指定信息或信息集
    public static function del($id)
    {

    }

    public static  function getMaxTypeLevel(){
        $res=self::where(['isDel'=>0])->field('typeLevel')->order('typeLevel desc')->find();
        if($res) return $res['typeLevel'];
        else return 0;
    }
    //判断是否有子类
    public static function hasChild($id){
        $res= self::where(['isDel'=>0,'id'=>$id])->field('nextId')->find();
        if($res['nextId']) return true;
        else return false;
    }

    //获取朋友属性
    public static function getFriends($typeLevel=1){
        $res=self::where(['isDel'=>0,'typeLevel'=>$typeLevel])->field('id,typeName,typeLevel,sort')->order('sort desc')->select();
        if($res){ foreach ($res as $k => $v){
            $father=self::hasChild($v['id']);
            if($father) $v['hasChildren']=true;
            else $v['hasChildren']=false;
        }
         return $res;}
        else return 0;
    }
//获取下一代属性
    public static  function getNextSons($id){
      $res=self::where(['isDel'=>0,'id'=>$id])->field('nextId')->find();
      if($res) {
          if($res['nextId']) {
              $sons = self::where(['isDel' => 0])->whereIn(['id' => $res['nextId']])->field('id,typeName,typeLevel,sort')->order('sort desc')->select();
              if($sons) {
                  foreach ($sons as $k => $v){
                      $father=self::hasChild($v['id']);
                      if($father) $v['hasChildren']=true;
                      else $v['hasChildren']=false;
                  }
                  return $sons;
              }
              else return 0;
          }
          else return -1;
      }
      else{
          return 0;
      }
    }
}