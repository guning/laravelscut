<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('admin/xhgk/gywx');
});
Route::get('/{kind}/{page}', function ($kind = 'xhgk', $page = 'gywx') {
    return view("admin/$kind/$page");
})->where('kind', 'xhgk|xhdt|sybj|yjfk');

Route::get('/test',function (){
    return view('admin/main');
});

//Route::post('/uploadfile','UploadFile@index');
Route::post('/uploadfile',function (){
    return "hello";
});

Route::any('/ueditor', 'Ueditor@index');
/*Route::any('/ueditor', function (){
    return 'hello';
});*/