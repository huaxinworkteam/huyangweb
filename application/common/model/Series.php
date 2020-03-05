<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/10/12
 * Time: 13:53
 */

namespace app\common\model;


use think\Model;
use think\model\concern\SoftDelete;

class Series extends Model
{
    use SoftDelete;

    //院系添加
    public function add($data){
        $validate=new \app\common\validate\Series();
        if(!$validate->scene('add')->check($data)){
            return $validate->getError();
        }
        $return=$this->save($data);
        if($return){
            return 1;
        }else{
            return '添加失败';
        }


    }
}