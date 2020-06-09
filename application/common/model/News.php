<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/25
 * Time: 11:05
 */

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class News extends Model
{


    public function add($data)
    {
        $validate = new \app\common\validate\News();
        if (!$validate->scene('add')->check($data)) {
            return $validate->getError();
        }
        $result = $this->allowField(true)->save($data);
        if ($result) {
            return 1;
        } else {
            return '新闻添加失败';
        }
    }

    public function newsedit($data)
    {
        $validate = new \app\common\validate\News();
        if (!$validate->scene('edit')->check($data)) {
            return $validate->getError();
        }
        $sql = $this->find($data['newsid']);
        $sql->newstitle = $data['newstitle'];
        $sql->isShow = $data['isShow'];
        $sql->writer = $data['writer'];
        $sql->articleKey = $data['articleKey'];
        if($data['newspicture']){
        $sql->newspicture=$data['newspicture'];}
        $sql->articleContent = $data['articleContent'];
        $result = $sql->save();
        if ($result) {
            return 1;
        } else {
            return '文章编辑失败';
        }

    }

    public function newsshow($data)
    {
        $validate = new \app\common\validate\News();
        if (!$validate->scene('show')->check($data)) {
            return $validate->getError();
        }
        $newsinfo = $this->find($data['newsid']);
        $newsinfo->isShow = $data['isShow'];
        $result = $newsinfo->save();
        if ($result) {
            return 1;
        } else {
            return "操作失败";
        }

    }


}