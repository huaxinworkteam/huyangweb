<?php

namespace app\index\controller;

use think\Controller;

class About extends Controller
{
    public function Index()
    {
        return view();                //“关于创合汇”主页
    }

    public function survey()
    {
        return view('369');             //子页，下同
    }

    public function speech()
    {
        return view('370');
    }

    public function culture()
    {
        return view('371');
    }

    public function video()
    {
        return view();
    }

    public function join()
    {
        return view();
    }
}
