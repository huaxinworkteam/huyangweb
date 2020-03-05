<?php

namespace app\admin\controller;


class Teachers extends Base
{
    //教师管理页面
    public function index(){
        $title="输入查找";
        $this->assign('title',$title);
        $sql = model('teachers')->alias('n')->join('series a', 'a.seriesID=n.seriesNO')->order('hy_teachers.update_time desc')->paginate(10);
        $viewdata = [
            'teachers' => $sql,
        ];
        $this->assign($viewdata);

        $total = count(model('teachers')->select());
        $this->assign('total', $total);
        return view();
    }
    //教师添加
    public function add()
    {
        $series=db('series')->select();
        $this->assign('series',$series);
        //ajax添加响应
        if (request()->isAjax()) {
            $data = [
                'teachername' => input('teachername'),
                'seriesNO' => input('seriesNO'),
                'teacherlevel' => input('teacherlevel'),
                'isShow' => input('isShow') ? 1 : 0,
                'teacherdescription' => input('teacherdescription'),
                'teacherdirection' => input('teacherdirection'),
                'teacherphoto'=>"/upload/teacherpic/".input('teacherphoto'),
            ];
            $result = model('Teachers')->add($data);
            if ($result == 1) {
                $this->success('教师添加成功', 'admin/teachers/index');
            } else {
                $this->error($result);
            }
        }
        return view();
    }

    //教师显示
    public function show()
    {
        $data = [
            'teacherid' => input('teacherid'),
            'isShow' => input('isShow') ? 0 : 1
        ];
        $result = model('Teachers')->show($data);
        if ($result == 1) {
            $this->success('操作成功', 'admin/teachers/index');
        } else {
            $this->error($result);
        }
    }
    //教师编辑
    public function edit(){
        if (request()->isAjax()) {
            $data = [
                'teacherid'=>input('teacherid'),
                'teachername' => input('teachername'),
                'seriesNO' => input('seriesNO'),
                'teacherlevel' => input('teacherlevel'),
                'isShow' => input('isShow',0),
                'teacherdescription' => input('teacherdescription'),
                'teacherdirection' => input('teacherdirection'),
                'teacherphoto'=>"/upload/teacherpic/".input('teacherphoto'),
            ];
            $result = model('teachers')->edit($data);
            if ($result) {
                $this->success('编辑成功','admin/Teachers/index');
            } else {
                $this->error($result);
            }
        }
        $teacherinfo = model('Teachers')->find(input('teacherid'));
        $this->assign('teacherinfo', $teacherinfo);
        $series=db('series')->select();
        $this->assign('series',$series);
        return view();
    }

    //教师删除
    public  function  del(){
        $teacherinfo = model('teachers')->find(input('teacherid'));
        $result = $teacherinfo->delete();
        if ($result) {
            $this->success('删除成功', 'admin/teachers/index');
        } else {
            $this->error($result);
        }
    }
    //教师批量删除
    public function delteachers(){
        if(request()->isAjax()){
            $return=db('teachers')->whereIn('teacherid',input('id'))->delete();
            if($return){
                $this->success('删除成功','admin/teachers/index');
            }else{
                $this->error($return);
            }

        }
    }
    //教师搜索
    public function search(){
        $searchinfo=input('search');
        if($searchinfo== null){
            url('admin/teachers/index');
        }
        $sq=model('Teachers')->where('teachername','like','%'.$searchinfo.'%')->select();
        $total=count($sq);
        $this->assign('total',$total);
        $sql=model('Teachers')->alias('n')->join('series a', 'a.seriesId=n.seriesNO')->order('create_time desc')->where('teachername','like','%'.$searchinfo.'%')->paginate(10);
        $this->assign('teachers',$sql);
        return view('teachers/index');
    }
    //院系列表
    public function series(){
        $teachers=model('teachers')->alias('t')->rightJoin('series a','a.seriesID=t.seriesNO')->field('a.seriesID,a.series,sum(t.seriesNO) as sums')->group('a.seriesID')->select()->toArray();
        $this->assign('series',$teachers);
        $total=count(model('series')->select());
        $this->assign('total',$total);
        return view('teachers/series');

    }
    //新增院系
    public function addseries(){
        if(request()->isAjax()){
            $data=[
                'series'=>input('series'),
            ];
            $result=model('Series')->add($data);
            if($result==1){
                $this->success('添加成功','admin/Teachers/series');
            }else{
                $this->error($result);
            }

        }

        return view('teachers/addseries');
    }

    //删除院系
    public function delseries(){
        if(request()->isAjax()){
           $return=db('series')->whereIn('seriesID',input('id'))->delete();
            if($return){
                $this->success('删除成功','admin/teachers/series');
            }else{
                $this->error($return);
            }

        }
    }
}
