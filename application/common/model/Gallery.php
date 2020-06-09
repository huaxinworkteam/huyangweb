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
        if($data['id']) {$result=$this->where('id',$data['id'])->update($data);}
       else $result = $this->allowField(true)->save($data);
        if ($result) {
            return 1;
        } else {
            return '信息添加失败';
        }
    }
   // 获取一个指定id的数据
    public function getInfo($id){
        $res=Gallery::where('id',$id)->find();
        return $res;
    }

}