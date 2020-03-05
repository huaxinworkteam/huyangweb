<?php

namespace app\admin\controller;


class Admin extends Base
{
    //管理员列表
    public function all(){
        $sql=model('Admin')->select();
        $total=count($sql);
        $this->assign('total',$total);
        $admin=model('Admin')->order(['is_super desc','status desc','create_time desc'])->paginate(10);
        $this->assign('admin',$admin);
        return view();
    }
    //管理员添加操作
    public function add(){
        if(request()->isAjax()){
            $data=[
                'username'=>input('username'),
                'nickname'=>input('nickname'),
                'password'=>input('password'),
                'email'=>input('email'),
                'phone'=>input('phone'),
                'is_super'=>input('is_super'),
            ];
            $result=model('Admin')->add($data);
            if($result==1){
                $this->success('管理员添加成功','admin/admin/all');
            }else{
                $this->error($result);
            }
        }
        return view();
    }

    //管理员状态操作
    public function status(){
            $data=[
                'id'=>input('id'),
                'status'=>input('status')? 0 : 1,
            ];
            $admininfo=model('Admin')->find($data['id']);
            $admininfo->status=$data['status'];
            $return=$admininfo->save();
            if($return){
                $this->success('操作成功','admin/admin/all');

            }
            else{
                $this->error($return);
            }
    }

    //管理员修改
    public function edit(){
        if(request()->isAjax()){
            $data = [
                'id'=>input('id'),
                'password'=>input('password'),
                'nickname'=>input('nickname'),
                'is_super'=>input('is_super'),
                'phone'=>input('phone'),
                'email'=>input('email')
            ];
            $result=model('Admin')->edit($data);
            if($result==1){
                $this->success('修改成功','admin/admin/all');

            }else{
                $this->error($result);
            }
        }
        $admininfo = model('Admin')->find(input('id'));
        $this->assign('admin', $admininfo);
        return view();
    }
    //管理员删除操作
    public function del(){
        $param= model('Admin')->find(input('id'));
        $result = $param->delete();
        if ($result) {
            $this->success('删除成功', 'admin/admin/all');
        } else {
            $this->error($result);
        }
    }
    //管理员批量删除
    public function deladmin(){
        if(request()->isAjax()){
            $return=db('admin')->whereIn('id',input('id'))->delete();
            if($return){
                $this->success('删除成功','admin/admin/all');
            }else{
                $this->error($return);
            }

        }
    }
    //管理员搜索
    public function adminsearch(){
            $searchinfo=input('search');
            if($searchinfo== null){
                url('admin/admin/all');
            }
        $sq=model('Admin')->where('nickname','like','%'.$searchinfo.'%')->whereOr('phone',$searchinfo)->whereOr('email',$searchinfo)->order(['is_super desc','status desc','create_time desc'])->select();
         $total=count($sq);
         $this->assign('total',$total);
        $sql=model('Admin')->where('nickname','like','%'.$searchinfo.'%')->whereOr('phone',$searchinfo)->whereOr('email',$searchinfo)->order(['is_super desc','status desc','create_time desc'])->paginate(10);
            $this->assign('admin',$sql);
            return view('admin/all');
    }
}
