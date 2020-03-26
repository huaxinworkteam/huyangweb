<?php

namespace app\admin\controller;


class Teachers extends Base
{
    //教师管理页面
    public function index(){
        $sql = model('teachers')->alias('n')->leftjoin('series a', 'a.seriesID=n.seriesNO')->where('n.delete_time',NULL)->select();
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
        $series=db('series')->where('delete_time',null)->field('seriesID,series')->order('seriesSort desc')->select();
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
                'teacherphoto'=>input('teacherphoto'),
                'sort'=>input('sort'),
                'isTop'=>input('isTop') ? 1 : 0,
                'create_time'=>time(),
                'update_time'=>time()
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
            $this->success('操作成功', '/admin/teachers/index');
        } else {
            $this->error($result);
        }
    }
    //教师编辑
    public function edit(){
        $id=input('teacherid');
        if (request()->isAjax()) {

           $result=model('Teachers')->leftJoin('series s','seriesNO=s.seriesID')->field('seriesNO,s.series,teacherid,teachername,teacherlevel,job,teacherdescription,teacherphoto,isShow,isTop,sort')->find($id);
            if ($result) {
                return json_encode(['code'=>1,'data'=>$result]);
            } else {
                return json_encode(['code'=>0,'message'=>'获取数据失败']);
            }
        }
        $this->assign('teacherid', $id);
        $series=db('series')->where('delete_time',null)->field('seriesID,series')->order('seriesSort desc')->select();
        $this->assign('series',$series);
        return view();
    }

    public function editSave(){
     $data = [
     'teacherid'=>input('teacherid'),
     'teachername' => input('teachername'),
     'seriesNO' => input('seriesNO'),
     'teacherlevel' => input('teacherlevel'),
     'job' => input('job'),
     'isShow' => input('isShow',0),
     'isTop' => input('isTop',0),
     'teacherdescription' => input('teacherdescription'),
     'teacherphoto'=>input('teacherphoto'),
     'sort'=>input('sort'),
      'update_time'=>time(),
    ];
     $res=model('teachers')->edit($data);
     if($res==1){
         return json_encode(['code'=>1,'message'=>'编辑成功']);
     }else return json_encode(['code'=>0,'message'=>'编辑失败']);
    }
    //教师删除
    public  function  del(){
        $result = model('teachers')->where('teacherid',input('teacherid'))->update(['delete_time'=>time()]);
        if ($result) {
            $this->success('删除成功', 'admin/teachers/index');
        } else {
            $this->error($result);
        }
    }
    //教师批量删除
    public function delteachers(){
        if(request()->isAjax()){
            $return=db('teachers')->whereIn('teacherid',input('id'))->update(['delete_time'=>time()]);
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

        $teachers=model('series')->alias('a')->leftJoin('teachers t','a.seriesID=t.seriesNO')->where(['t.delete_time'=>null])->where(['a.delete_time'=>null])->field('a.seriesID,a.series,seriesSort,count(t.seriesNO) as sums,a.icon')->group('a.seriesID')->select()->toArray();
    //   halt($teachers);
        $has='';
        foreach ($teachers as $k=>$v){
            $has=$has.$teachers[$k]['seriesID'].',';
        }
        $miss=model('series')->whereNotIn('seriesID',$has)->where('delete_time',null)->field('series,seriesID,seriesSort,icon')->select()->toArray();
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
                'seriesID'=>input('seriesID'),
                'series'=>input('series'),
                'seriesSort'=>input('seriesSort'),
                'introdution'=>input('introdution')?input('introdution'):null,
                'icon'=>input('icon')?input('icon'):null
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


    public function editSeries(){
        $id=input('seriesID');
        if(request()->isAjax()){
            $res=model('series')->where('seriesID',$id)->field(['seriesID,series,seriesSort,introdution,icon'])->find();
            if($res) return json_encode(['code'=>1,'data'=>$res]);
            else return json_encode(['code'=>0,'message'=>'获取数据失败']);
        }
        $this->assign('seriesID',$id);
        return view('teachers/editseries');

}
    //删除院系
    public function delseries(){
        if(request()->isAjax()){
            $id=','.input('seriesID').',';
           $return=model('series')->whereIn('seriesID',$id)->update(['delete_time'=>time()]);
            if($return){
                $this->success('删除成功','admin/teachers/series');
            }else{
                $this->error($return);
            }

        }
    }
}
