<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Dashboard extends Controller
{
    public function index()
    {
        return view('pages-admin.DashBoard')->with('user', session()->get('user'));
    }


}
