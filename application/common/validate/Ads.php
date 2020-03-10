<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/10
 * Time: 15:24
 */

namespace app\common\validate;


use think\Validate;

class Ads extends Validate
{
    protected  $rule=[
        'positionType|位置类型'=>'require',
        'adpositionId|广告位置ID'=>'require',
        'adFile|广告文件'=>'require',
        'adName|广告名称'=>'require',
        'adURL|广告网址'=>'require',
        'adStartDate|广告开始日期'=>'require',
        'adEndDate|广告结束日期'=>'require',
    ];
}