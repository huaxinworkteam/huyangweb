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
    {
        parent::__construct();
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


    /**
     * 请求方式及url：
    请求方式：get
    接口地址：https://api.xiaoe-tech.com/token
    {
    "app_id": "appxxxxxxxxxxx",
    "client_id": "xopxxxxxxxxxx",
    "secret_key": "xxxxxxxxxxxxx",
    "grant_type": "client_credential"    //获取token时， grant_type = client_credential
    }
    详情：https://api-doc.xiaoe-tech.com/index.php?s=/2&page_id=4158
     */
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


    /**
     * 参数名	        必选	类型	        说明	备注（示例）
        data.goods_id	是	    string	        资源id	...
        data.goods_type	是	    int	资源类型	图文-1，音频-2，视频-3，直播-4，会员-5，专栏-6，大专栏-8，电子书-20
     *
     *  POST

        https://api.xiaoe-tech.com/xe.goods.detail.get/3.0.0
     *
     * 请求实例
     * {
        'access_token':'accessxxxx',
        'data' : {
        'goods_id':'i_xxxxxxxx',
        'goods_type':1
        }
        }
     *
     * 返回实例见https://api-doc.xiaoe-tech.com/index.php?s=/2&page_id=4169
     *
     */
    public function getGoodsDetail($goods_id,$goods_type){
        $access_token=self::$access_token;
        $url='https://api.xiaoe-tech.com/xe.goods.detail.get/3.0.0';
        $method='post';
        $data=json_encode([
            'access_token'=>$access_token,
            'data'=>[
                'goods_id'=>$goods_id,
                'goods_type'=>$goods_type
            ]
        ]);
        $res=curl_request($url,$data,$method);

    }

    public function  getAllGoods($name,$ZLtype){
        $goods_id= input（‘id’）；
    }
}