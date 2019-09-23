<?php

namespace app\index\controller;

use think\Controller;

class Activity extends Controller
{
    public  function  Index(){
        return view();
    }
    public function  series(){
        return view('466');
    }
    public function subjects(){
        return view('468');
    }
    public function campus(){
        return view('469');
    }
    public function redrabbit(){
        return view('470');
    }
}
