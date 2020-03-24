<?php
/**
 * Created by PhpStorm.
 * User: 93709
 * Date: 2020/3/24
 * Time: 15:22
 */

namespace app\common\validate;


use think\Validate;

class Xetzhuanlan extends Validate
{
    protected  $rule= [
      'goods_id'=>'require|unique:xetzhuanlan',
        'goods_name'=>'require|unique:xetzhuanlan',
        'goods_type'=>'require'
    ];

    public function sceneEdit(){
        return $this->only($this->rule);
    }
}