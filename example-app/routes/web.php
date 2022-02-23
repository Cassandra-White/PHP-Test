<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');

    return "Ok ça marche";
});

Route::get('/alex', function () {
    $popo = [
        "data" => "Je suis un test",
        "name"=> "Alex",
        "number"=> 13,
        "boole"=> true,
    ];
    return ($popo);
});

Route::get('/test/{id}/{name}', function ($id, $name){
    return "response : " . $id . " " . $name;
});

Route::get('/admin/test/exemple', array('as' => 'admin.home', function (){

        $url = route('admin.home');

        return("Resulta = " . $url);
}));
