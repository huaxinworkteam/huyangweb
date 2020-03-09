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
}