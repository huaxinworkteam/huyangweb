<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/9
 * Time: 15:33
 */

namespace app\admin\controller;
use app\common\model\AdPositions;


class Ads extends  Base
{
    public function index(){
        return view();
    }

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
            'positionCode'=>input('positionCode'),
            'apSort'=>input('apSort')

        ];
        $res=AdPositions::add($data);
        if($res==1)
            return json_encode(['code'=>1,'message'=>'添加成功']);
        else return json_encode(['code'=>0,'message'=>'添加失败']);

    }
}