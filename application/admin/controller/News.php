<?php

namespace app\admin\controller;
use think\Request;
class News extends Base
{
    //新闻列表
    public function  lists()
    {  $title="输入查找";
        $this->assign('title',$title);
        $news = model('news')->where('n.delete_time',null)->alias('n')->join('admin a', 'a.id=n.staffId')->order('a.id')->where('a.delete_time',null)->paginate(20);
        $viewdata = [
            'news' => $news,
        ];
        $this->assign($viewdata);

        $total = count(model('news')->where('delete_time',null)->select());
        $this->assign('total', $total);
        return view();
    }

//新闻添加
    public function add()
    {
        //ajax添加响应
        if (request()->isAjax()) {
            $data = [
                'newstitle' => input('articleTitle'),
                'articleKey' => input('articleKey'),
                'writer' => input('articleAuthor'),
                'isShow' => input('isShow') ? 1 : 0,
                'articleContent' => input('content'),
                'newspicture'=>"/upload/newspic/".input('newspicture'),
            ];
            $result = model('News')->add($data);
            if ($result == 1) {
                $this->success('新闻添加成功', 'admin/news/lists');
            } else {
                $this->error($result);
            }
        }
        return view();
    }

    //显示
    public function newsshow()
    {
        $data = [
            'newsid' => input('newsid'),
            'isShow' => input('isShow') ? 0 : 1
        ];
        $result = model('News')->newsshow($data);
        if ($result == 1) {
            $this->success('操作成功', 'admin/news/lists');
        } else {
            $this->error($result);
        }
    }

    //编辑
    public function newsedit()
    {
        if (request()->isAjax()) {
            $data = [
                'newsid' => input('newsid'),
                'newstitle' => input('articleTitle'),
                'isShow' => input('isShow', 0),
                'articleContent' => input('content'),
                'articleKey' => input('articleKey'),
                'writer' => input('articleAuthor'),
                'newspicture'=>"/upload/newspic/".input('newspicture'),

            ];
            $result = model('News')->newsedit($data);
            if ($result) {
                $this->success('新闻编辑成功', 'admin/news/lists');
            } else {
                $this->error($result);
            }
        }
        $newsinfo = model('News')->find(input('newsid'));
        $this->assign('newsinfo', $newsinfo);
        return view('news/edit');
    }

    //删除
    public function newsdel()
    {
        $result = model('News')->where('newsid',input('newsid'))->update(['delete_time'=>time()]);
        if ($result) {
            $this->success('新闻删除成功', 'admin/news/lists');
        } else {
            $this->error($result);
        }

    }

    //搜索
    public function newssearch()
    {
        $title = input('searchInput');
        $this->assign('title', $title);
        $search = input('search');
        if ($title == null) {
            url('admin/news/lists');
        } else {
            if ($search == 'news') {
                goto news;
            }
            if ($search == 'writer') {
                goto writer;
            }
        }
        news:
        $sql = model('News')->alias('n')->join('admin a', 'a.id=n.staffId')->where('newstitle', 'like', '%' . $title . '%')->order('createtime desc')->paginate(10);
        $this->assign('news', $sql);
        $num = model('News')->alias('n')->join('admin a', 'a.id=n.staffId')->where('newstitle', 'like', '%' . $title . '%')->select();
        $total = count($num);
        goto end;
        writer:
        $sql = model('News')->alias('n')->join('admin a', 'a.id=n.staffId')->where('writer', 'like', '%' . $title . '%')->order('createtime desc')->paginate(10);
        $this->assign('news', $sql);
        $num = model('News')->alias('n')->join('admin a', 'a.id=n.staffId')->where('writer', 'like', '%' . $title . '%')->select();
        $total = count($num);
        goto end;
        end:
        $this->assign('total', $total);
        return view('news/lists');
    }

    //uploader后台接受
    public function fileUpload(Request $request)
    {

        //获取图片对象
        $filetemp = $request->file('file');
        if ($filetemp) {
            //存放服务器上地址
            $serverFile = $filetemp->move(ROOT_PATH . '/public/upload/newspic');
            if($serverFile) {
                //访问地址
                return json_encode('/upload/newspic/'.$serverFile->getSaveName());
            }else{
                echo $filetemp->getError();
            }
        }
    }
    //批量删除
    public function delnews(){
        if(request()->isAjax()){
            $return=db('news')->whereIn('newsid',input('id'))->update(['delete_time'=>time()]);
            if($return){
                $this->success('删除成功','admin/news/lists');
            }else{
                $this->error($return);
            }

        }
    }
}
