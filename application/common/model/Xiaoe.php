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

    private static  $token_array;

    private static  $access_token;

    private static  $expires_in;

    public  function  __construct()
    {   parent::__construct();
        self::$secret_key=config('xiaoe.secret_key');
        self::$app_id=config('xiaoe.app_id');
        self::$client_id=config('xiaoe.client_id');
        self::$grant_type='client_credential';
        if(!self::$access_token) {
            $getAT = self::$access_token = $this->makeAccessToken();
            if ($getAT) {
                self::$access_token = self::$token_array['access_token'];
                self::$expires_in = self::$token_array['expires_in'];
            }
        }
    }
//获取access_token值和expire_in过期时间
    public  function makeAccessToken(){
        $url='https://api.xiaoe-tech.com/token';
        $method='get';
        $data=array('app_id'=>self::$app_id,'client_id'=>self::$client_id,"secret_key"=>self::$secret_key,"grant_type"=>self::$grant_type);
      $param=http_build_query($data);
      //  $data=json_encode($data);
        $res=curl_request($url.'?'.$param,'',$method);
        if($res) {
            $result=json_decode($res,true);
            self::$token_array=$result['data'];
            return 1;
        }
        else return 0;
    }

    public function test(){
        return self::$access_token;
    }
}