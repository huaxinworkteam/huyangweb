<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/5
 * Time: 14:41
 */

namespace app\admin\controller;


class Gallery extends Base
{
    public  function index(){
        $webno=$_GET['webno'];
        if($webno!=null)
        $sql=model('gallery')->where('is_del',0)->where('webno',$_GET['webno'])->select();
        else return json_encode(['code'=>-1,'message'=>'缺少参数webno']);
        $this->assign('gallery',$sql);
        return view('slideshow/all');
    }
    public function add(){

        if(request()->isAjax()){
            $data = [
                'webno' => input('webno'),
                'path' => input('path'),
                'is_show' => input('is_show') ? 1 : 0,
                'create_time'=>time(),
                'sort'=>input('sort')?input('sort'): 0
            ];
            $result = model('Gallery')->add($data);
            if ($result == 1) {
                $this->success('添加成功', 'admin/gallery/index');
            } else {
                $this->error($result);
            }
        }
        return view();
    }


}