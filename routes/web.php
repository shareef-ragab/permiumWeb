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

use App\Http\Middleware\loginAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', array('as'=>'home','uses'=>'home@index'));
Route::post('local',array("as" => 'local','uses'=>function(Request $request){
    $local= $request->input('lang');
    Session::put('local', $local);
   return redirect()->back();
})
);
Route::get('/service', array('as' => 'service','uses' => 'service@index'));
Route::post('/send_service', array('as' => 'send_service','uses' => 'service@send_service'));
Route::get('/COST_CALCULATOR', array('as' => 'COST_CALCULATOR','uses' => 'COST_CALCULATOR@index'));
Route::post('/CALCULATE', array('as' => 'CALCULATE','uses' => 'COST_CALCULATOR@CALCULATE'));
Route::get('/login', array('uses' => 'Profile@login'))->middleware(loginAuth::class);
Route::post('/login', array('as'=>'login_user','uses' => 'Profile@login_user'));
Route::get('/Dashboard', array('as'=>'Dashboard','uses' => 'Dashboard@index'));
Route::get('/lock', array('as'=>'lock','uses' => 'Profile@lock'));
Route::post('/unlock', array('as'=>'unlock','uses' => 'Profile@unlock'));
Route::get('/logout', array('as'=>'logout','uses' => 'Profile@logout'));
Route::get('/Calender', array('as'=>'Calender','uses'=>function () {
    return view('calender')->with('user', session()->get('user'));
}));
