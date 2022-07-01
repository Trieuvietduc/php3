<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// use Illuminate\Http\Request;
Route::get('user', function(Request $request){
    dd($request->all());
    $user = [
    [
        'name'=>'Đức',
        'age'=> 20,
        'address'=> 'Hà Nội',
        'status'=> 1
    ],
     [
        'name'=>'khanh',
        'age'=> 20,
        'address'=> 'Hà Nội',
        'status'=> 0
     ]    
    ];
    return view('user',[
        'list_user'=> $user
    ]);
});
// Route::get('/user','UserController@index');
Route::get('user/{id}/{name}',function($id, $name){
    dd($id,$name);
});
route::get('register',function(){
    return view('register');
});
// route::get('register-succes',function(Request $request){
//     // nhận dũ liệu và truyền qua cho view
//     // $repuest lấy tất cả dữ liệu trên thanh url
//     // dd($request->all());
//     $name = $request['name'];
//     $email = $request['email'];
//     $passwork = $request['passwork'];
    
//     return view('register-success',[
//         'list_name'=>$name,
//         'list_email'=>$email,
//         'list_passwork'=>$passwork,
//     ]);
// })->name('a');
route::post('register-succes',function(Request $request){
    // nhận dũ liệu và truyền qua cho view
    // $repuest lấy tất cả dữ liệu trên thanh url
    // dd($request->all());
    $name = $request['name'];
    $email = $request['email'];
    $passwork = $request['passwork'];
    
    return view('register-success',[
        'list_name'=>$name,
        'list_email'=>$email,
        'list_passwork'=>$passwork,
    ]);
})->name('a');