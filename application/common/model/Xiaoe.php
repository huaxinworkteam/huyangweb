<?php
/**
 * Created by PhpStorm.
 * User: 93709
 * Date: 2020/3/20
 * Time: 13:38
 */

namespace app\common\model;

use think\Model;

class Xiaoe extends Model
{
    private  static $secret_key;

    private  static $app_id;

    private  static $client_id;

    private  static $grant_type;

    public  function  __construct()
    {   parent::__construct();
        self::$secret_key=config('xiaoe.secret_key');
        self::$app_id=config('xiaoe.app_id');
        self::$client_id=config('xiaoe.client_id');
        self::$grant_type='client_credential';

    }

    public  function getAccessToken(){
        $url='https://api.xiaoe-tech.com/token';
        $method='get';
        curlRequest('https://api.xiaoe-tech.com/token','GET',);
    }

}