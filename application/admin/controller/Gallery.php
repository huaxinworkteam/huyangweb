<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/5
 * Time: 14:41
 */

namespace app\admin\controller;

use think\Request;

class Gallery extends Base
{
    public  function index(){
        $webno=input('webno');
        if($webno==null) return json_encode(['code'=>-1,'message'=>'缺少参数webno']);
        $this->assign('webno',$webno);
        $sql=model('gallery')->where('is_del',0)->where('webno',$webno)->order(['is_show'=>'desc','sort'])->select();
        $this->assign('gallery',$sql);
        $count=sizeof($sql);
        $this->assign('count',$count);
        return view();
    }
    public function add(){
        $this->assign('webno',$_GET['webno']);
        return view();
    }

    public function save(){
        $webno=input('webno');
            $data = [
                'id'=>input('galleryId'),
                'webno' => $webno,
                'headline'=>input('headline'),
                'src'=>input('src'),
                'path' => input('path'),
                'is_show' => input('is_show') ? 1 : 0,
                'create_time'=>time(),
                'sort'=>input('sort')?input('sort'): 0,
                'platform'=>input('platform')
            ];
            $result = model('Gallery')->add($data);
            if ($result == 1) {
                $this->success('添加成功', 'admin/gallery/index/webno/'.$webno);
            } else {
                $this->error($result);
            }
        return view();
    }
    public function del(){
        if(request()->isAjax()){
            $return=db('gallery')->whereIn('id',input('galleryId'))->setField(['is_del'=>1]);
            if($return){
                $this->success('删除成功',$_SERVER['HTTP_REFERER']);
            }else{
                $this->error($return);
            }

        }
    }

    public function edit(){
        if(request()->isAjax()){
        $id=input('galleryId');
        $res=model('gallery')->getInfo($id)->toArray();
        if(!$res) return json_decode(['code'=>0,'message'=>'获取id失败']);
        return json_encode(['code'=>1,$res]);}

        $this->assign('galleryId',$_GET['galleryId']); //ajax请求在edit需要id
        return view();
    }

    public function shiftState(){
        $id=input('galleryId');
        $isShow=input('is_show') ? 0 : 1;
        $data=[
          'id'=>$id,
          'is_show'=>$isShow
        ];
        $result=model('gallery')->where('id',$id)->update($data);
        if($result)
            return json_encode(['code'=>1,'message'=>'更新成功']);
        else return json_encode(['code'=>0,'message'=>'操作失败']);
    }



}