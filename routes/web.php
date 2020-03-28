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
use App\Http\Middleware\redirectLogin;
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
Route::get('/Dashboard', array('as'=>'Dashboard','uses' => 'Dashboard@index'))->middleware(redirectLogin::class);
Route::get('/lock', array('as'=>'lock','uses' => 'Profile@lock'))->middleware(redirectLogin::class);
Route::post('/unlock', array('as'=>'unlock','uses' => 'Profile@unlock'));
Route::get('/logout', array('as'=>'logout','uses' => 'Profile@logout'))->middleware(redirectLogin::class);
Route::get('/Calender', array('as'=>'Calender','uses'=>function () {
    return view('pages-admin.calender')->with('user', session()->get('user'));
}))->middleware(redirectLogin::class);
Route::get('/edit_content', array('as'=>'edit_content','uses'=>'edit_content@edit_content_statics'))->middleware(redirectLogin::class);
Route::get('/edit_footer', array('as'=>'edit_footer','uses'=>'edit_content@edit_footer'))->middleware(redirectLogin::class);
Route::get('/edit_header', array('as'=>'edit_header','uses'=>'edit_content@edit_header'))->middleware(redirectLogin::class);
Route::get('/edit_Offer', array('as'=>'edit_offer','uses'=>'edit_content@edit_offer'))->middleware(redirectLogin::class);
Route::get('/edit_trends', array('as'=>'edit_trends','uses'=>'edit_content@edit_trend'))->middleware(redirectLogin::class);
Route::get('/edit_customer_say', array('as'=>'edit_customer_say','uses'=>'edit_content@edit_customer_say'))->middleware(redirectLogin::class);
Route::get('/edit_Solutions', array('as'=>'edit_Solutions','uses'=>'edit_content@edit_Solutions'))->middleware(redirectLogin::class);
Route::get('/edit_partnership', array('as'=>'edit_partnership','uses'=>'edit_content@edit_partnership'))->middleware(redirectLogin::class);
Route::get('/portfolio', array('as' => 'portfolio','uses' => 'protfolio@index'));
