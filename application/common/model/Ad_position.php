<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/9
 * Time: 19:19
 */

namespace app\common\model;
use think\model;

class Ad_position extends  model
{
    protected $pk='positionId';

    public  function add($data){
        if(!$data) return false;
        $validate =new \app\common\validate\Ad_position();
        if(!$validate->check($data)){
            return $validate->getError();
        }
        if($data['positionId']) $res=$this->where('positionId',$data['positionId'])->allowField(true)->update($data);
     else   $res=$this->allowField(true)->save($data);
        if($res){
            return 1;
        }else{
            return '发送失败';
        }


    }

}