<?php

namespace app\index\controller;

use app\common\model\Activity;
use app\common\model\News;
use app\common\model\Teachers;
use app\common\model\Gallery;
use think\Controller;
use think\Db;

class Index extends Controller
{  //footer
    public function footer(){
        $group = Teachers::alias('t')->Join('series s','s.seriesID=t.seriesNO')->where('isShow',1)->group('seriesNO')->select();
        $this->assign('footer_szll', $group);
    }
    //header
    public function header(){
      //  $SQL=model('Teachers')->alias('t')->Join('series s','s.seriesID=t.seriesNO')->where('isShow',1)->group('seriesNO')->select();
       $SQL=model('series')->where('delete_time',null)->order('seriesSort desc')->select();
        $this->assign('shizi',$SQL);
    }
    //主页
    public function index()
    {   $this->header();
        $this->footer();
        //获取学院类别
/*        $group = Teachers::alias('t')->Join('series s','s.seriesID=t.seriesNO')->group('seriesNO')->select();
        $this->assign('group', $group);*/
        $gallery=Gallery::where('webno',0)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        //获取教师信息
    /*    $t = input('seriesNO');
       if (!$t)*/
            $list = Teachers::where('isShow',1)->where('delete_time',null)->limit(8)->order('seriesNO','create_time')->select();
      /*  else  $list = Teachers::where('seriesNO', $t)->limit(4)->select();*/
        $this->assign('teachers', $list);
        //主页下方左侧新闻
        $news=News::where('isShow',1)->order('createTime desc')->limit(6)->select();
        $this->assign('news',$news);
        //主页下方右侧活动
        $index_activity=Activity::where('isShow',1)->order('createTime desc')->limit(2)->select();
        $this->assign('index_activity',$index_activity);

        return view('chhcollege/index');
    }
    //左边活动栏
    public function left_bar(){

        $activity = Activity::where('isShow',1)->order('createTime desc')->limit(5)->select();
        $this->assign('activity', $activity);

    }
    //活动查询
    public function activity()
    {  $this->header();
        $this->left_bar();
        $this->footer();
        $all_acticity=Activity::where('isShow',1)->order('createTime desc')->paginate(4);
        $this->assign('all_activity',$all_acticity);
        return view('chhcollege/activity/index');
    }
    public  function act_detail(){
        $this->header();
        $this->left_bar();
        $this->footer();
        //获取参数
        $param=input('activityId');
        $act_id = Activity::where('activityId',$param)->find();
        $this->assign('act_id', $act_id);
        return view('chhcollege/activity/detail');
    }
  //新闻查询
    public function news()
    {   $this->header();
        $this->left_bar();
        $this->footer();
        $gallery=Gallery::where('webno',4)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        $news = News::where('isShow',1)->order('createTime desc')->paginate(6);
        $this->assign('news', $news);

        return view('chhcollege/news/index');
    }
    //新闻独立页面查询
    public  function news_detail(){
        $this->header();
        $this->left_bar();
        $this->footer();
        $gallery=Gallery::where('webno',4)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        //获取参数
        $param=input('newsid');
       $newsid = News::where('newsid',$param)->find();
        $this->assign('newsid', $newsid);
        return view('chhcollege/news/detail');
    }
    //关于胡杨概况页面
    public function about()
    {  $this->header();
        $this->left_bar();
        $this->footer();
        $gallery=Gallery::where('webno',1)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        return view('chhcollege/about/index');
    }
    //关于胡杨概况页面
    public function organization()
    {  $this->header();
        $this->left_bar();
        $this->footer();
        return view('chhcollege/about/organization');
    }
    //课程页面
    public function course()
    {   $this->footer();
        $this->header();
        $gallery=Gallery::where('webno',2)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        return view('chhcollege/course/index');
    }
    //咨询页面
    public function contact()
    {   $this->footer();
        $this->header();
        $this->left_bar();
        $gallery=Gallery::where('webno',5)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        return view('chhcollege/contact/contact');
    }
 //师资力量页面
    public function szll()

    {   $this->footer();
        $this->header();
        $this->left_bar();
        //获取学院类别
        $group = Teachers::alias('t')->Join('series s','s.seriesID=t.seriesNO')->where('isShow',1)->group('seriesNO')->select();
        $this->assign('group', $group);
        $gallery=Gallery::where('webno',3)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        $t = input('seriesNO');
        //获取教师信息
        if (!$t)
            $list = Teachers::alias('t')->where(['t.isShow'=>'1','t.delete_time'=>null ])->leftJoin('series s' ,' t.seriesNO=s.seriesID')->field('teacherphoto,teachername,teacherdescription,series,teacherlevel,job')->order("t.sort desc,t.create_time asc")->paginate(7);
        else   $list = Teachers::alias('t')->where(['t.seriesNO'=>$t,'t.isShow'=>'1','t.delete_time'=>null ])->leftJoin('series s', 't.seriesNO=s.seriesID')->field('teacherphoto,teachername,teacherdescription,series,teacherlevel,job')->order("t.sort desc,t.create_time asc")->paginate(7);
        $this->assign('teachers', $list);
        return view('chhcollege/szll/szll');
    }
   //sendEmail
    public function sendEmail(){
        if(request()->isAjax()) {
            $data=[
              'g_name'=>input('name'),
              'g_phone'=>input('phone'),
                'QQ'=>input('qq'),
                'g_email'=>input('email'),
                'g_content'=>input('content'),
            ];
            $result=model('guests')->Email($data);

            if($result==1){
                $res = sendEmail($data['g_content'],"937096063@qq.com",$data['g_email']);
                $this->success('感谢投递','contact');
            }else{
                $this->error($result);
            }
        }
    }
    //header栏搜索

/*    public function  search(){
        $this->header();
        $this->left_bar();
        $searchresult=new class{};
        if(request()->isAjax()){
            $data=[
              'key'=>input('keys'),
            ];
           $searchresult=News::where('newstitle','like','%'.$data['key'].'%')->whereOr('writer','like','%'.$data['key'].'%')->whereOr('articleContent','like','%'.$data['key'].'%')->select();
           if(!empty($searchresult)&&input('keys')){
                $this->success('','search');
            }else{
                if(input('keys'))
                $this->error('没找到内容');
                else{
                    $this->error('请输入内容');
                }
            }
        }
        $this->assign("all",$searchresult);
        return view('chhcollege/search/index');

    }*/


    //关于学院介绍页面
    public function introduction()
    {  $this->header();
        $this->left_bar();
        $this->footer();
        return view('chhcollege/about/introduction');
    }
    //个人品牌学院
    public function personalbrand()
    {  $this->header();
        $this->left_bar();
        $this->footer();
        return view('chhcollege/about/personalbrand');
    }
    //财税学院
    public function financeandtax()
    {  $this->header();
        $this->left_bar();
        $this->footer();
        return view('chhcollege/about/financeandtax');
    }


}
