<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/25
 * Time: 11:57
 */
namespace app\common\model;

use think\Model;

class Activity extends  Model
{


    public function add($data)
    {
        $validate = new \app\common\validate\Activity();
        if (!$validate->scene('add')->check($data)) {
            return $validate->getError();
        }
        $result = $this->allowField(true)->save($data);
        if ($result) {
            return 1;
        } else {
            return '活动添加失败';
        }
    }

    public function activityedit($data)
    {
        $validate = new \app\common\validate\Activity();
        if (!$validate->scene('edit')->check($data)) {
            return $validate->getError();
        }
        $sql = $this->find($data['activityId']);
        $sql->activityTitle = $data['activityTitle'];
        $sql->isShow = $data['isShow'];
        $sql->writer = $data['writer'];
        $sql->articleKey = $data['articleKey'];
        $sql->startTime = $data['startTime'];
        $sql->endTime = $data['endTime'];
        if($data['activity_pic'])
        {$sql->activity_pic = $data['activity_pic'];}
        $sql->articleContent = $data['articleContent'];
        $result = $sql->save();
        if ($result) {
            return 1;
        } else {
            return '文章编辑失败';
        }

    }

    public function activityshow($data)
    {
        $validate = new \app\common\validate\Activity();
        if (!$validate->scene('show')->check($data)) {
            return $validate->getError();
        }
        $activityinfo = $this->find($data['activityId']);
        $activityinfo->isShow = $data['isShow'];
        $result = $activityinfo->save();
        if ($result) {
            return 1;
        } else {
            return "操作失败";
        }

    }


}