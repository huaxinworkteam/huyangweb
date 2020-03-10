<?php

namespace app\admin\controller;


class Teachers extends Base
{
    //教师管理页面
    public function index(){
        $sql = model('teachers')->alias('n')->leftjoin('series a', 'a.seriesID=n.seriesNO')->paginate(20);
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
                'job' => input('job'),
                'isShow' => input('isShow') ? 1 : 0,
                'teacherdescription' => input('teacherdescription'),
                'teacherphoto'=>"/upload/teacherpic/".input('teacherphoto'),
                'sort'=>input('sort')
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
                'job' => input('job'),
                'isShow' => input('isShow',0),
                'teacherdescription' => input('teacherdescription'),
                'teacherphoto'=>"/upload/teacherpic/".input('teacherphoto'),
                'sort'=>input('sort')
            ];
            $result = model('teachers')->edit($data);
            if ($result) {
                $this->success('编辑成功','admin/Teachers/index');
            } else {
                $this->error($result);
            }
        }
        $teacherinfo = model('Teachers')->leftJoin('series s','seriesNO=s.seriesID')->field('s.series,teacherid,teachername,teacherlevel,job,teacherdescription,teacherphoto,isShow,sort')->find(input('teacherid'));
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
        $sql=model('Teachers')->alias('n')->join('series a', 'a.seriesId=n.seriesNO')->order('sort desc ,create_time desc')->where('teachername','like','%'.$searchinfo.'%')->paginate(20);
        $this->assign('teachers',$sql);
        return view('teachers/index');
    }
    //院系列表
    public function series(){

        $teachers=model('series')->alias('a')->leftJoin('teachers t','a.seriesID=t.seriesNO')->where(['t.delete_time'=>null])->where(['a.delete_time'=>null])->field('a.seriesID,a.series,count(t.seriesNO) as sums')->group('a.seriesID')->select()->toArray();
        $has='';
        foreach ($teachers as $k=>$v){
            $has=$has.$teachers[$k]['seriesID'].',';
        }
        $miss=model('series')->whereNotIn('seriesID',$has)->where('delete_time',null)->field('series,seriesID')->select()->toArray();
       foreach ($miss as $k=>$v) {
            $miss[$k]['sums']=0;
       }
        $teachers=array_merge($teachers,$miss);
        $this->assign('series',$teachers);
        $total=count(model('series')->where('delete_time',null)->select());
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
