<?php

namespace app\admin\controller;

use think\Controller;
use think\Exception;
use think\Request;

class Webupload extends Controller
{
    //获取教师图片路径
    public function teacherpicUpload(Request $request)
    {

        //获取图片对象
        $filetemp = $request->file('file');
        if ($filetemp) {
            //存放服务器上地址
            $serverFile = $filetemp->move(ROOT_PATH . '/public/upload/teacherpic');
            if($serverFile) {
                //访问地址
                return json_encode($serverFile->getSaveName());
            }else{
                echo $filetemp->getError();
             }
        }
    }
    //获取轮播图图片路径
    public function galleryUpload(Request $request)
    {

        //获取图片对象
        $filetemp = $request->file('file');
        if ($filetemp) {
            //存放服务器上地址
            $serverFile = $filetemp->move(ROOT_PATH . '/public/upload/gallery');
            if($serverFile) {
                //访问地址
                return json_encode($serverFile->getSaveName());
            }else{
                echo $filetemp->getError();
            }
        }
    }
    //获取广告图片路径
    public function adsUpload(Request $request)
    {
        //获取图片对象
        $filetemp = $request->file('file');
        if ($filetemp) {
            //存放服务器上地址
            $serverFile = $filetemp->move(ROOT_PATH . '/public/upload/ads');
            if($serverFile) {
                //访问地址
                return json_encode($serverFile->getSaveName());
            }else{
                echo $filetemp->getError();
            }
        }
    }
    //获取院系图片路径
    public function seriesUpload(Request $request)
    {
        //获取图片对象
        $filetemp = $request->file('file');
        if ($filetemp) {
            //存放服务器上地址
            $serverFile = $filetemp->move(ROOT_PATH . '/public/upload/seriesIcon');
            if($serverFile) {
                //访问地址
                return json_encode($serverFile->getSaveName());
            }else{
                echo $filetemp->getError();
            }
        }
    }
}
