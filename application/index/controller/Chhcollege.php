<?php

namespace app\index\controller;

use think\Controller;

class Chhcollege extends Controller
{
    public function index()
    {
        return view();
    }
    public  function  activity(){
        return view('chhcollege/activity/index');
    }
    public function  news(){
        return view('chhcollege/news/index');
    }
    public function about()
    {
        return view('chhcollege/about/index');
    }

    public function course()
    {
        return view('chhcollege/course/index');
    }

    public function contact()
    {
        return view('chhcollege/contact/contact');
    }

    public function szll()
    {
        return view('chhcollege/szll/szll');
    }
    public function m402()
    {
        return view('chhcollege/course/402');
    }
    public function m404()
    {
        return view('chhcollege/course/404');
    }
    public function m385()
    {
        return view('chhcollege/course/385');
    }
    public function m375()
    {
        return view('chhcollege/course/375');
    }
    public function m380()
    {
        return view('chhcollege/course/380');
    }
    public function m379()
    {
        return view('chhcollege/course/379');
    }
    public function m381()
    {
        return view('chhcollege/course/381');
    }
    public function m382()
    {
        return view('chhcollege/course/382');
    }
    public function m383()
    {
        return view('chhcollege/course/383');
    }
}
