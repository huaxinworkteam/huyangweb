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


    //从指定id处的nextId卸下某一元素 ,成功则返回集合，否则返回false
    public static function setOff($id, $element)
    {
        $bool = -1;
        $sql=self::where(['id'=>$id])->field('nextId')->find();
        $set=$sql['nextId'];
        $array = explode(',', $set);
        foreach ($array as $k => $v) {
            if ($v == $element) {
                $bool = $k;
                break;
            }
        }
        if ($bool != -1) {
            unset($array[$k]);
           try{
            self::where('id',$id)->update(['nextId'=>implode(',', $array)]);
            return true;
           }catch (\Exception $e){
               return $e->getMessage();
           }
        }
        else return false;
    }
    /**从指定id中的nextId装上某一元素
     * @param $id
     * @param $element
     * @return bool|string
     */
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
           return true;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     *清空指定id的nextId
     * @param $id
     */
    public static  function setClear($id){
       try {self::where(['id'=>$id])->update(['nextId'=>null]);
       }
       catch (\Exception $e){
           return $e->getMessage();
       }
        return true;
    }

    public  static  function  setGet($id){
        try{
            $sql=self::where(['id'=>$id])->field('nextId')->find();
            $res=$sql['nextId'];
        }catch (\Exception $e){
            return $e->getMessage();
        }
        return $res;
    }
    public static  function  setAdd($id,$string){
        try{
            self::where(['id'=>$id])->update(['nextId'=>$string]);
        }catch (\Exception $e){
            return $e->getMessage();
        }
            return true;
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
        if(!$validate->check($data)){
            return $validate->getError();
        }
        if($data['lastId']!=0){
            $father=self::where('id',$data['lastId'])->field('typeLevel')->find();
            if($father)
            $data['typeLevel']=$father['typeLevel']+1;
            else return '父节点未找到';
        }else{
            $data['typeLevel']=1;
        }
        if($data['id']) {
           try {
                self::where('id', $data['id'])->update($data);
                if($data['lastId']!=0)
                $newstring=self::setGet($data['lastId']).$data['id'];
                self::setClear($data['lastId']);
                self::setAdd($data['lastId'],$newstring);
           }catch (\Exception $e){
               return $e->getMessage();
           }
        }else{
            unset($data['id']);
            try{
                model('CourseType')->insert($data);
                $id=self::where(['typeName'=>$data['typeName']])->order('id desc')->find()['id'];
                if($data['lastId']!=0)
                self::setOn($data['lastId'],$id);
            }catch (\Exception $e){
                return $e->getMessage();
            }
        }
            return 1;
    }

    //删除指定信息或信息集
    public static function del($id)
    {
        $id=','.$id.',';
        $arr=model('CourseType')->whereIn('id',$id)->update(['isDel'=>1]);
        if($arr) return 1;
        else return 0;
    }

    public static  function getAllTypeLevel(){
        $res=self::where(['isDel'=>0])->field('id,typeName,typeLevel')->order('typeLevel desc')->find();
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
              $sons = self::where(['isDel' => 0])->whereIn('id' , $res['nextId'])->field('id,typeName,typeLevel,sort')->order('sort desc')->select();
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