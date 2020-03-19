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

    public function index()
    {

    }

}
