<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


Route::group('admin',function (){
    Route::rule('/','admin/index/login','get|post');
    Route::rule('index','admin/home/index','get');
    Route::rule('loginout','admin/home/loginout','post');
    Route::rule('newslist','admin/news/lists','get|post');
    Route::rule('newsadd','admin/news/add','get|post');
    Route::rule('newsshow','admin/news/newsshow','get|post');
    Route::rule('newsedit/[:newsid]','admin/news/newsedit','get|post');
    Route::rule('newsdel','admin/news/newsdel','get|post');
    Route::rule('loginverify','admin/index/verify','get|post');
    Route::rule('webupload','admin/WebuploadController/fileUpload','get|post');
  /*  Route::rule('newssearch','admin/news/newssearch','get|post');*/
    Route::rule('activitylist','admin/activity/lists','get|post');
    Route::rule('activityadd','admin/activity/add','get|post');
    Route::rule('activityshow','admin/activity/activityshow','get|post');
    Route::rule('activityedit/[:activityid]','admin/activity/activityedit','get|post');
    Route::rule('activitydel','admin/activity/activitydel','get|post');
    Route::rule('adminlist','admin/admin/all','get|post');
    Route::rule('adminadd','admin/admin/add','get|post');
    Route::rule('adminstatus','admin/admin/status','get|post');
    Route::rule('adminedit/[:id]','admin/admin/edit','get|post');
    Route::rule('admindel','admin/admin/del','get|post');
    Route::rule('teacherlist','admin/teachers/index','get|post');
    Route::rule('teacheradd','admin/teachers/add','get|post');
    Route::rule('teacheredit/[:teacherid]','admin/teachers/edit','get|post');
    Route::rule('teacherdel','admin/teachers/del','get|post');
    Route::rule('addseries','admin/teachers/addseries','get|post');
});

