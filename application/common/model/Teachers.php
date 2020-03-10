<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/24
 * Time: 10:43
 */
namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Teachers extends  Model
{
    use SoftDelete;

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
        $sql = $this->find($data['teacherid']);
        $sql->teachername = $data['teachername'];
        $sql->isShow = $data['isShow'];
        $sql->seriesNO = $data['seriesNO'];
        $sql->teacherlevel = $data['teacherlevel'];
        $sql->job = $data['job'];
        $sql->teacherdescription= $data['teacherdescription'];
        $sql->sort=$data['sort'];
        if($data['teacherphoto']){
            $sql->teacherphoto= $data['teacherphoto'];
        }
        $result = $sql->save();
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