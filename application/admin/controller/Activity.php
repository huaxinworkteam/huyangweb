<?php

namespace app\admin\controller;
use think\Request;
class Activity extends Base
{
    //新闻列表
    public function lists()
    {
        $title="输入查找";
        $this->assign('title',$title);
        $activity = model('activity')->alias('n')->join('admin a', 'a.id=n.staffId')->order('createTime desc')->paginate(10);
        $viewdata = [
            'activity' => $activity,
        ];
        $this->assign($viewdata);

        $total = count(model('activity')->select());
        $this->assign('total', $total);
        return view();
    }

//新闻添加
    public function add()
    {
        //ajax添加响应
        if (request()->isAjax()) {
            $data = [
                'activityTitle' => input('articleTitle'),
                'articleKey' => input('articleKey'),
                'writer' => input('articleAuthor'),
                'isShow' => input('isShow') ? 1 : 0,
                'articleContent' => input('content'),
                'staffId'=>session('admin.id'),
                'activity_pic'=>"/upload/activitypic/".input('activity_pic'),
                'startTime'=>input('startTime'),
                'endTime'=>input('endTime')
            ];
            $result = model('activity')->add($data);
            if ($result == 1) {
                $this->success('新闻添加成功', 'admin/activity/lists');
            } else {
                $this->error($result);
            }
        }
        return view();
    }

    //显示
    public function activityshow()
    {
        $data = [
            'activityId' => input('activityId'),
            'isShow' => input('isShow') ? 0 : 1
        ];
        $result = model('activity')->activityshow($data);
        if ($result == 1) {
            $this->success('操作成功', 'admin/activity/lists');
        } else {
            $this->error($result);
        }
    }

    //编辑
    public function activityedit()
    {
        if (request()->isAjax()) {
            $data = [
                'activityId' => input('activityId'),
                'activityTitle' => input('articleTitle'),
                'isShow' => input('isShow',0),
                'articleContent' => input('content'),
                'articleKey' => input('articleKey'),
                'writer' => input('articleAuthor'),
                'activity_pic'=>"/upload/activitypic/".input('activity_pic'),
                'startTime'=>input('startTime'),
                'endTime'=>input('endTime')
            ];
            $result = model('activity')->activityedit($data);
            if ($result) {
                $this->success('新闻编辑成功', 'admin/activity/lists');
            } else {
                $this->error($result);
            }
        }
        $activityinfo = model('activity')->find(input('activityId'));
        $this->assign('activityinfo', $activityinfo);
        return view('activity/edit');
    }

    //删除
    public function activitydel()
    {
        $result = model('activity')->where('activityId',input('activityId'))->update(['delete_time'=>time()]);
        if ($result) {
            $this->success('活动删除成功', 'admin/activity/lists');
        } else {
            $this->error($result);
        }

    }

    //搜索
    public function activitysearch()
    {
        $title = input('searchInput');
        $this->assign('title', $title);
        $search = input('search');
        if ($title == null) {
            url('admin/activity/list');
        } else {
            if ($search == 'activity') {
                goto activity;
            }
            if ($search == 'writer') {
                goto writer;
            }
        }
        activity:
        $sql = model('activity')->alias('n')->join('admin a', 'a.id=n.staffId')->where('activityTitle', 'like', '%' . $title . '%')->order('createtime desc')->paginate(10);
        $this->assign('activity', $sql);
        $num = model('activity')->alias('n')->join('admin a', 'a.id=n.staffId')->where('activityTitle', 'like', '%' . $title . '%')->select();
        $total = count($num);
        goto end;
        writer:
        $sql = model('activity')->alias('n')->join('admin a', 'a.id=n.staffId')->where('writer', 'like', '%' . $title . '%')->order('createtime desc')->paginate(10);
        $this->assign('activity', $sql);
        $num = model('activity')->alias('n')->join('admin a', 'a.id=n.staffId')->where('writer', 'like', '%' . $title . '%')->select();
        $total = count($num);
        goto end;
        end:
        $this->assign('total', $total);
        return view('activity/lists');
    }
    //WebUpload
    public function fileUpload(Request $request)
    {

        //获取图片对象
        $filetemp = $request->file('file');
        if ($filetemp) {
            //存放服务器上地址
            $serverFile = $filetemp->move(ROOT_PATH . '/public/upload/activitypic');
            if($serverFile) {
                //访问地址
                return json_encode($serverFile->getSaveName());
            }else{
                echo $filetemp->getError();
            }
        }
    }

    //批量删除
    public function delactivity(){
        if(request()->isAjax()){
            $return=db('activity')->whereIn('activityId',input('id'))->update(['delete_time'=>time()]);
            if($return){
                $this->success('删除成功','admin/activity/lists');
            }else{
                $this->error($return);
            }

        }
    }
}
