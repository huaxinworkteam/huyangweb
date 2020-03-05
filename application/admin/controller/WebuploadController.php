<?php

namespace app\admin\controller;

use think\Controller;
use think\Exception;
use think\Request;

class WebuploadController extends Controller
{
    public function fileUpload(Request $request)
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
}
