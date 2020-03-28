<?php

namespace App\Http\Controllers;

class edit_content extends Controller
{
    public function edit_content_statics()
    {
        return view('pages-admin.edit-content-statics')->with('user', session()->get('user'));
    }

    public function edit_footer()
    {
        return view('pages-admin.edit-footer')->with('user', session()->get('user'));
    }

    public function edit_header()
    {
        return view('pages-admin.edit-header')->with('user', session()->get('user'));
    }

    public function edit_offer()
    {
        return view('pages-admin.edit_offer')->with('user', session()->get('user'));
    }

    public function edit_trend()
    {
        return view('pages-admin.edit-trends')->with('user', session()->get('user'));
    }
    public function edit_customer_say()
    {
        return view('pages-admin.edit-customer_say')->with('user', session()->get('user'));
    }
    public function edit_Solutions()
    {
        return view('pages-admin.edit-Solutions')->with('user', session()->get('user'));
    }
    public function edit_partnership()
    {
        return view('pages-admin.edit-partinership')->with('user', session()->get('user'));
    }

    public function index()
    {

    }

}
