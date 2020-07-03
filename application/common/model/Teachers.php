<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/24
 * Time: 10:43
 */
namespace app\common\model;

use think\Model;

class Teachers extends  Model
{
    protected $pk='teacherid';
    //教师添加
    public function add($data)
    {
        $validate = new \app\common\validate\Teachers();
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
    //教师编辑
    public function edit($data)
    {
        $validate = new \app\common\validate\Teachers();
        if (!$validate->scene('edit')->check($data)) {
            return $validate->getError();
        }
    $result=$this->allowField(true)->update($data);
        if ($result) {
            return 1;
        } else {
            return '编辑失败';
        }

    }
    //教师显示
    public function show($data)
    {
        $validate = new \app\common\validate\Teachers();
        if (!$validate->scene('show')->check($data)) {
            return $validate->getError();
        }
        $teacherinfo = $this->find($data['teacherid']);
        $teacherinfo->isShow = $data['isShow'];
        $result = $teacherinfo->save();
        if ($result) {
            return 1;
        } else {
            return "操作失败";
        }

    }
}