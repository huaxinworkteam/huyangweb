<?php
/**
 * Created by PhpStorm.
 * User: 马鹏飞
 * Date: 2020/3/9
 * Time: 20:32
 */

namespace app\common\validate;


use think\Validate;

class AdPositions extends Validate
{
  protected  $rule=[
      'positionType|位置类型'=>'require',
      'positionName|位置名称'=>'require',
      'positionCode|位置代码'=>'require',
      'positionWidth|建议宽度'=>'require',
      'positionHeight|建议高度'=>'require'
      ];

}