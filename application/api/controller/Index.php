<?php
/**
 * Created by PhpStorm.
 * User: 93709
 * Date: 2020/4/8
 * Time: 15:04
 */

namespace app\api\controller;
use app\common\model\Teachers;
use think\Db;
use app\common\model\News;
use app\common\model\Gallery;
use app\common\model\AboutMore;
use app\common\model\Series;
use app\common\model\Xetzhuanlan;
class Index
{
    public function index(){
        $teacherInfo = Teachers::where('isShow',1)->where('delete_time',null)->where('isTop',1)->limit(8)->order('indexSort desc,sort desc')->select();
        $activity=Db::connect('db_config1')->name('fx_activity')->field('id,title,thumb,intro')->where('show',1)->order('displayorder desc,id desc')->limit(3)->select();
        $news=News::where('isShow',1)->where('delete_time',null)->order('createTime desc')->limit(3)->select();
        $gallery=Gallery::where('webno',0)->where('platform',input('platform'))->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $data=[
            'gallery'=>$gallery,
            'teacherInfo'=>$teacherInfo,
            'activity'=>$activity,
            'news'=>$news
        ];
        return myJson('T',$data);
    }

    public function aboutMore(){
        $gallery=Gallery::where('webno',1)->where('platform',input('platform'))->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $gaikuang=AboutMore::where(['isIndex'=>1,'isShow'=>1,'isDel'=>0])->find();
        $xueyuan=Series::where(['delete_time'=>null])->field('seriesID,series,icon')->order(['seriesSort'=>'desc'])->select();
        $zuzhi=AboutMore::where('name','组织架构')->field('id,name,content')->find();
        $data=[
            'gallery'=>$gallery,
            'gaikuang'=>$gaikuang,
            'xueyuan'=>$xueyuan,
            'zuzhi'=>$zuzhi
        ];
        return myJson('T',$data);
    }

    public function course(){
        $gallery=Gallery::where('webno',4)->where('platform',input('platform'))->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $zhuanlan=Xetzhuanlan::where('is_del',0)->order('sort desc')->field('id,goods_name')->select();
        $data=[
            'gallery'=>$gallery,
            'zhuanlan'=>$zhuanlan
        ];
        return myJson('T',$data);
        }

    public function getCourse(){
        $goods_name=input('goods_name');
        $last_id=input('last_id')?:'';
        $page_size=input('page_size')?:20;
        $resource_type=input('resource_type')?:['3','4'];
        $a=model('Xiaoe')->getAllGoods($goods_name,$last_id,$page_size,$resource_type);
        return $a;
    }

    public function news(){
        $gallery=Gallery::where('webno',5)->where('platform',input('platform'))->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $news = News::where('isShow',1)->where('delete_time',null)->order('createTime desc')->paginate(99);
        $data=[
            'gallery'=>$gallery,
            'news'=>$news
        ];
        return myJson('T',$data);
    }

    public function  newsDetail(){
        $gallery=Gallery::where('webno',5)->where('platform',input('platform'))->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $param=input('newsid');
        $newsDetail = News::where('newsid',$param)->find();
        $data=[
            'gallery'=>$gallery,
            'newsDetail'=>$newsDetail
        ];
        return myJson('T',$data);
    }

    public function shizi(){
        $group=Series::where('delete_time',null)->order('seriesSort desc')->field('series,seriesID')->select();
        $gallery=Gallery::where('webno',2)->where('platform',input('platform'))->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $data=[
            'gallery'=>$gallery,
            'series'=> $group
        ];
        return myJson('T',$data);
    }

    public function shiziInfo(){
        $t = input('seriesNO');
        $n =input ('number')?:10;
        $p =input('page')?:1;
        if (!$t)
        $list = Teachers::alias('t')->where(['t.isShow'=>'1','t.delete_time'=>null ])->leftJoin('series s' ,' t.seriesNO=s.seriesID')->field('teacherphoto,teachername,teacherdescription,series,teacherlevel,job')->order("t.sort desc,t.create_time asc")->limit(($p-1)*$n,$n)->select();
        else   $list = Teachers::alias('t')->where(['t.seriesNO'=>$t,'t.isShow'=>'1','t.delete_time'=>null ])->leftJoin('series s', 't.seriesNO=s.seriesID')->field('teacherphoto,teachername,teacherdescription,series,teacherlevel,job')->order("t.sort desc,t.create_time asc")->limit(($p-1)*$n,$n)->select();
        $data=[
            'shiziInfo'=>$list
        ];
        return myJson('T',$data);
    }
}