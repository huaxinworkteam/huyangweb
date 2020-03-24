<?php

namespace app\index\controller;

use app\common\model\Activity;
use app\common\model\Config;
use app\common\model\Course;
use app\common\model\CourseType;
use app\common\model\News;
use app\common\model\Series;
use app\common\model\Teachers;
use app\common\model\Gallery;
use app\common\model\Xiaoe;
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        global $kefu;
        if(!$GLOBALS['kefu']){
            $kefu=Config::getAll()->toArray();
            $this->assign('config',$kefu);
        }
    }

    //header and footer
    public function headFoot(){
       $xueYuan=model('series')->where('delete_time',null)->order('seriesSort desc')->select();
        $this->assign('shizi',$xueYuan);
        $AB=model('AboutMore')->where(['isDel'=>0,'isShow'=>1])->field('id,name')->order(['sort'=>'desc'])->select();
        $this->assign('AB',$AB);
        $course=model('CourseType')->where(['isDel'=>0,'typeLevel'=>1])->field('id,typeName')->order('sort desc')->select();
        $this->assign('Course',$course);
    }
    //主页
    public function index()
    {   $this->headFoot();
        $gallery=Gallery::where('webno',0)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
            $list = Teachers::where('isShow',1)->where('delete_time',null)->where('isTop',1)->limit(8)->order('sort desc')->select();
        $this->assign('teachers', $list);
        //主页下方左侧新闻
        $news=News::where('isShow',1)->order('createTime desc')->limit(6)->select();
        $this->assign('news',$news);
        //主页下方右侧活动
        $index_activity=Db::connect('db_config1')->name('fx_activity')->field('id,title,thumb,intro')->where('show',1)->order('displayorder desc')->limit(3)->select();
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
    {
        $this->headFoot();
        $gallery=Gallery::where('webno',4)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        if(request()->isAjax()) {
            $p=input('page');
            if(!$p) return myJson('F','参数异常');
            $all_activity = Db::connect('db_config1')->name('fx_activity')->field('id,title,thumb,intro,starttime,endtime,address')->where(['show'=>1,'merchantid'=>19])->order('displayorder desc')->limit(($p['current_page']-1)*$p['per_page'],$p['per_page'])->select();
            $total=Db::connect('db_config1')->where(['show'=>1,'merchantid'=>19])->name('fx_activity')->count();
            if($all_activity) return myJson('T',['info'=>$all_activity,'total'=>$total]);
            else return myJson('T',['info'=>'','total'=>0]);
        }
        return view('chhcollege/activity/index');
    }
    public  function act_detail(){

        $this->headFoot();
        $this->left_bar();
        $gallery=Gallery::where('webno',4)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        //获取参数
        $param=input('activityId');
        $act_id=Db::connect('db_config1')->name('fx_activity')->field('id,title,pagetitle,freetitle,aprice,marketprice,mprice,tel,intro,detail,starttime,endtime,joinstime,joinetime,thumb,atlas,gnum,lng,lat,adinfo,addname,address,prize,form,midkey,recommend')->where(['id'=>$param])->find();
       $act_id['qrCode']='https://test.v7mall.com/app/index.php?i=2&c=entry&m=fx_activity&do=activity&ac=detail&op=display&activityid='.$param;
     //  halt($act_id);
        $this->assign('act_id', $act_id);
        return view('chhcollege/activity/detail');
    }

    public function getRecommend(){
        if(request()->isAjax()){
            $recommendAct = Db::connect('db_config1')->name('fx_activity')->field('id,title,thumb,intro,starttime,endtime')->where(['show'=>1,'merchantid'=>19,'recommend'=>1])->order('displayorder desc')->select();
             return myJson('T',$recommendAct);
        }
        return myJson('F','请求被拒绝');
    }
  //新闻查询
    public function news()
    {   $this->headFoot();
        $this->left_bar();

        $gallery=Gallery::where('webno',4)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        $news = News::where('isShow',1)->order('createTime desc')->paginate(6);
        $this->assign('news', $news);

        return view('chhcollege/news/index');
    }
    //新闻独立页面查询
    public  function news_detail(){
        $this->headFoot();
        $this->left_bar();

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
    {  $this->headFoot();
        $this->left_bar();

        $gallery=Gallery::where('webno',1)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        return view('chhcollege/about/index');
    }
    //关于胡杨概况页面
    public function aboutMore()
    {  $this->headFoot();
        $this->left_bar();

        $gallery=Gallery::where('webno',3)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        $id=input('id');
        $content=model('AboutMore')->where('id',$id)->field('id,name,content')->find();
        $this->assign('content',$content);
        return view('chhcollege/about/about_more');
    }
    //课程页面
    public function course()
    {   $this->headFoot();

        $gallery=Gallery::where('webno',2)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        $id=input('id');
        $concrete=model('Course')->where(['isDel'=>0,'courseType'=>$id])->field('id,courseName')->order('sort desc')->select();
        $this->assign('concrete',$concrete);
        if($concrete->toArray()) {
            $indexId = $concrete[0]['id'];
            $content=Course::getOne($indexId);
            $this->assign('content',$content);
        }else{
            $typeName=model('CourseType')->where('id',$id)->field('typeName')->find()['typeName'];
            $this->assign('content',['courseName'=>'暂无课程','courseIntroduce'=>'暂无课程内容','typeName'=>$typeName]);
        }
        return view('chhcollege/course/index');
    }
    //异步获取子分类
    public function getSons(){
        $id=input('id');
        $res=CourseType::getNextSons($id);
        if($res) return myJson('T',$res);
        else return myJson('F');
    }

    //异步获取课程介绍
    public function introduce(){
        $id=input('id');
        $res=Course::getOne($id);
        if($res) return myJson('T',$res);
        else return myJson('F','获取数据失败');
    }
    //咨询页面
    public function contact()
    {   $this->headFoot();

        $this->left_bar();
        $gallery=Gallery::where('webno',5)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        return view('chhcollege/contact/contact');
    }
 //师资力量页面
    public function szll()

    {   $this->headFoot();

        $this->left_bar();
        //获取学院类别
      //  $group = Teachers::alias('t')->Join('series s','s.seriesID=t.seriesNO')->where('isShow',1)->group('seriesNO')->select();
        $group=Series::where('delete_time',null)->order('seriesSort desc')->field('series,seriesID')->select();
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

    //关于学院介绍页面
    public function introduction()
    {  $this->headFoot();
        $this->left_bar();

        $gallery=Gallery::where('webno',3)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        $xueyuan=Series::where(['delete_time'=>null])->field('seriesID,series')->order(['seriesSort'=>'desc'])->select();
        $this->assign('xueyuan',$xueyuan);
        return view('chhcollege/about/introduction');
    }
    //个人品牌学院
    public function college()
    {  $this->headFoot();
        $this->left_bar();

        $seriesID=input('seriesID');
        $res=Series::where('seriesID',$seriesID)->field('seriesID,series,introdution')->find();
        $this->assign('XYI',$res);
        $gallery=Gallery::where('webno',3)->where('is_show',1)->where('is_del',0)->order('sort')->field('headline,src,path')->select();
        $this->assign('gallery',$gallery);
        return view('chhcollege/about/college');
    }

    public function getCourse(){
        $goods_name=input('goods_name');
        $last_id=input('last_id')?:'';
        $page_size=input('page_size')?:20;
        $resource_type='['.(input('resource_type')?:'3,4').']';
        $a=model('Xiaoe')->getAllGoods($goods_name,$last_id,$page_size,$resource_type);
        if(is_object($a)) return $a;
        else return false;
    }

    public  function  getCourseDetail(){
        $goods_id=input('goods_id');
        $goods_type=input('goods_type');
        $a=model('Xiaoe')->getGoodsDetail($goods_id,$goods_type);
        if(is_object($a)) return $a;
        else return false;  
    }
}
