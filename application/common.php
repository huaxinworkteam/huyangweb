<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function myJson($Sema,$data=null){
    if($Sema==='T')
    return json_encode(['code'=>1,'message'=>'success','data'=>$data]);
    if($Sema==='F')
    return json_encode(['code'=>0,'message'=>'fail','data'=>$data]);
}

