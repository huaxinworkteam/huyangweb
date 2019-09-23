<?php

namespace app\index\controller;

use think\Controller;

class Chhcapital extends Controller
{
   public function index(){
       return view();
   }
   public function about(){
       return view('chhcapital/about/index');
   }
   public function teams(){
       return view('chhcapital/about/teams');
   }
   public function funds(){
       return view('chhcapital/funds/index');
   }
   public  function  services(){
       return view('chhcapital/services/index');
   }
   public function  cases(){
       return view('chhcapital/cases/index');
   }
   public  function  road(){
       return view('chhcapital/road/index');
   }
    public  function  news(){
        return view('chhcapital/news/index');
    }
    public  function  contact(){
        return view('chhcapital/contact/index');
    }
}
