<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2019/10/11
 * Time: 10:49
 */

namespace app\common\model;
use think\Model;

class Guests extends Model
{
    public function Email($data){
        $validate = new \app\common\validate\Guests();
        if (!$validate->scene('cj')->check($data)) {
            return $validate->getError();
        }
        $result=$this->allowField('true')->insert($data);
        if($result){
            return 1;
        }else{
            return '发送失败';
        }
    }
}