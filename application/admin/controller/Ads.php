<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/9
 * Time: 15:33
 */

namespace app\admin\controller;
use app\common\model\AdPositions;
use app\common\model\Ads as AdsModel;

class Ads extends  Base
{
    public function index(){
        $sql=AdsModel::getAll();
        $this->assign('ads',$sql);
        $count=sizeof($sql);
        $this->assign('count',$count);
        return view();
    }

    public function add(){
        return view();
    }

    public  function edit(){
        return view();
    }
    public function save(){

    }

    public function  del(){

    }
    //==============================以下是location相关代码====================================
    public function location(){
        $sql=AdPositions::getAll();
        $this->assign('adsPosition',$sql);
        $count=sizeof($sql);
        $this->assign('count',$count);
        return view();
    }
    public function addLocation(){
        return view();
    }
    public function saveLocation(){
        $data=[
            'positionId'=>input('positionId'),
            'positionWidth'=>input('positionWidth'),
            'positionHeight'=>input('positionHeight'),
            'positionType'=>input('positionType'),
            'positionName'=>input('positionName'),
            'positionCode'=>input('positionCode'),
            'apSort'=>input('apSort')

        ];
        $res=AdPositions::add($data);
        if($res==1)
            return json_encode(['code'=>1,'message'=>'添加成功']);
        else return json_encode(['code'=>0,'message'=>'添加失败']);

    }

    public function delLocation(){
        $id=input('positionId');
        $res=AdPositions::del($id);
        if($res==1)
            return json_encode(['code'=>1,'message'=>'删除成功']);
        else return json_encode(['code'=>0,'message'=>'删除失败']);
    }

    public function editLocation(){
        $positionId=input('positionId');
        if(request()->isAjax()){
        $res=AdPositions::getInfo($positionId);
        if(!empty($res))return json_encode(['code'=>'1','data'=>$res]);
        else return json_encode(['code'=>0,'message'=>'error']);
        }

        $this->assign('positionId',$positionId);
        return view();
    }
}