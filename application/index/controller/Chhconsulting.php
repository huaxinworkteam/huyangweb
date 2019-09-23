<?php

namespace app\index\controller;

use think\Controller;

class Chhconsulting extends Controller
{
    public function index()
    {
        return view();
    }

    public function about()
    {
        return view('chhconsulting/about/index');
    }

    public function doctor()
    {
        return view('chhconsulting/service/367');
    }

    public function make()
    {
        return view('chhconsulting/service/406');
    }

    public function manage()
    {
        return view('chhconsulting/service/408');
    }

    public function advantage()
    {
        return view('chhconsulting/advantage/index');
    }

    public function activity()
    {
        return view('chhconsulting/activity/index');
    }

    public function customer()
    {
        return view('chhconsulting/activity/customer');
    }
    public function news()
    {
        return view('chhconsulting/news/index');
    }
    public function contact()
    {
        return view('chhconsulting/contact/index');
    }
}
