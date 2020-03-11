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
    //异步接受广告位置类型 返回广告位置
    public function getPosition(){
        if(request()->isAjax()){
            $positionType=input('positionType');
            $res=AdPositions::getPosition($positionType);
            if($res) return json_encode(['code'=>1,'data'=>$res]);
            else return json_encode(['code'=>0,'message'=>'获取广告位置信息失败']);
        }
        return false;
    }

    public  function edit(){
        $id=input('id');
        if(request()->isAjax()){
            $res=AdsModel::getInfo($id);
            if($res) return json_encode(['code'=>1,'data'=>$res]);
            else return json_encode(['code'=>0,'message'=>'获取信息失败']);
        }
        $this->assign('id',$id);
        return view();
    }
    public function save(){
        $data=[
          'id'=>input('id'),
            'adpositionId'=>input('adpositionId'),
            'adFile'=>input('adFile'),
            'adName'=>input('adName'),
            'adURL'=>input('adURL'),
            'adStartDate'=>input('adStartDate'),
            'adEndDate'=>input('adEndDate'),
            'adSort'=>input('adSort'),
            'positionType'=>input('positionType')
        ];
        if($data['id']==null) $data=array_merge($data,['createTime'=>time()]);
        $res=AdsModel::saveInfo($data);
        if($res==1) return json_encode(['code'=>1,'message'=>'保存成功']);
        else return json_encode(['code'=>0,'message'=>$res]);
    }

    public function  del(){
        $id=input('id');
        $res=AdsModel::del($id);
        if($res==1) return json_encode(['code'=>1,'message'=>'删除成功']);
        else return json_encode(['code'=>0,'message'=>'删除失败']);
    }

    public function search(){
        $index=input('adpositionId');
        $res=AdsModel::search($index);
        if($res){
        $this->assign('ads',$res);
        $count=sizeof($res);
         $this->assign('count',$count);}
         else{
             $this->assign('ads',[0=>['id'=>null,'adFile'=>null,'adName'=>null,'adURL'=>null,'adStartDate'=>null,'adEndDate'=>null,'adSort'=>null,'adClickNum'=>null,'positionType'=>null,'positionName'=>null]]);
             $this->assign('count',0);
         }
            return view('ads/index');

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
    public function searchLocation(){
        $index=input('index');
        $res=AdPositions::search($index);
        if($res){
            $this->assign('adsPosition',$res);
            $count=sizeof($res);
            $this->assign('count',$count);}
        else{
            $this->assign('adsPosition',[0=>['positionId'=>null,'positionName'=>null,'positionWidth'=>null,'positionHeight'=>null,'positionType'=>null,'positionCode'=>null]]);
            $this->assign('count',0);
        }
        return view('ads/location');
    }
}