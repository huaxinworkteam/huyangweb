<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/5
 * Time: 19:18
 */

namespace app\common\model;


use think\Model;

class Gallery extends  Model
{

    public function add($data)
    {
        $validate = new \app\common\validate\Gallery();
        if (!$validate->scene('add')->check($data)) {
            return $validate->getError();
        }
        $result = $this->allowField(true)->save($data);
        if ($result) {
            return 1;
        } else {
            return '信息添加失败';
        }
    }

}