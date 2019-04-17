<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('basic1', function() {
    return 'h';
});
Route::post('basic2', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});//不能通过url访问

//多种请求
Route::match(['get','post'],'more1',function(){
    return 'more';
});
Route::any('any',function(){
   return 'any';
});
//路由参数

/*Route::get('user/{id}',function ($id){
    return $id;
});*/
/*Route::get('user/{name?}',function ($name='default'){
    return $name;
});

Route::get('user/{name?}',function ($name='default'){
    return $name;
})->where('name','[A-Za-z]+');*/
/*Route::get('user/{id}/{name?}',function ($id,$name='default'){
    return 'id='.$id.'name='.$name;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);*/
//路由别名
//Route::get('user/center',['as'=>'center',function(){
//    return route('center');
//}]);
//路由群组
Route::group(['prefix'=>'member'],function (){
    Route::get('user/center',['as'=>'center',function(){
        return route('center');
    }]);
    Route::any('any',function(){
        return 'member-any';
    });
});

//路由中输出视图
//Route::get('member/info','MemberController@info');
//Route::get('member/info',['uses'=>'MemberController@info']);
//Route::any('member/info',[
//    'uses'=>'MemberController@info',
//    'as'=>'memberinfo'
//]);
Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');