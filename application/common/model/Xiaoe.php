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


    private static  $access_token;


    private static  $path='./access_token.php';

    public  function  __construct()
    {   parent::__construct();
        self::$secret_key=config('xiaoe.secret_key');
        self::$app_id=config('xiaoe.app_id');
        self::$client_id=config('xiaoe.client_id');
        self::$grant_type='client_credential';
        $AT=include_once './access_token.php';
        $sym=0;
        if(is_array($AT)) {
            APPLIED:
            if (array_key_exists('access_token', $AT)) {  //判断access_token是否在文件中存储
                if (time() < $AT['get_time'] + $AT['expires_in']){
                    self::$access_token=$AT['access_token']; //赋值access_token，提到内存中
                }
                else
                    {
                    goto TIMEUP; //数据过期 再次申请
                }
              }
              else {
                  TIMEUP:
                  if ($this->makeAccessToken()==1&&$sym==0) //如果access_token不在文件中，则获取一次access_token值和expire_in过期时间
                  {
                      $sym += 1;
                      goto APPLIED;
                  }else exit;
              }
        }else exit;
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
            $result['data']['get_time']=time();
            $save_text='<?php return '.var_export($result['data'],true).';';
            if(fopen(self::$path,'w')){
                file_put_contents(self::$path,$save_text);
            }else{
                return 0;
            }
            return 1;
        }
        else return 0;
    }

    public function test(){
        return self::$access_token;
    }
}