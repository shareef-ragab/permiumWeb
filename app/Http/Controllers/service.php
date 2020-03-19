<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class service extends Controller
{
    public function index()
    {
        return view('service')
            ->with('address', DB::table('content_static')->where('ID', 'address')->get())
            ->with('content_sevice', DB::table('content_static')->where('ID', 'content-sevice')->get())
            ->with('count_client', DB::table('content_static')->where('ID', 'count-client')->get())
            ->with('count_Operation', DB::table('content_static')->where('ID', 'count-Operation')->get())
            ->with('email', DB::table('content_static')->where('ID', 'email')->get())
            ->with('facebook_link', DB::table('content_static')->where('ID', 'facebook-link')->get())
            ->with('linkedin_link', DB::table('content_static')->where('ID', 'linkedin-link')->get())
            ->with('service_card_1_image', DB::table('content_static')->where('ID', 'service-card-1-image')->get())
            ->with('service_card_1_title', DB::table('content_static')->where('ID', 'service-card-1-title')->get())
            ->with('service_card_2_image', DB::table('content_static')->where('ID', 'service-card-2-image')->get())
            ->with('service_card_2_title', DB::table('content_static')->where('ID', 'service-card-2-title')->get())
            ->with('service_card_3_image', DB::table('content_static')->where('ID', 'service-card-3-image')->get())
            ->with('service_card_3_title', DB::table('content_static')->where('ID', 'service-card-3-title')->get())
            ->with('service_card_4_image', DB::table('content_static')->where('ID', 'service-card-4-image')->get())
            ->with('service_card_4_title', DB::table('content_static')->where('ID', 'service-card-4-title')->get())
            ->with('service_card_5_image', DB::table('content_static')->where('ID', 'service-card-5-image')->get())
            ->with('service_card_5_title', DB::table('content_static')->where('ID', 'service-card-5-title')->get())
            ->with('service_card_custom_content', DB::table('content_static')->where('ID', 'service-card-custom-content')->get())
            ->with('service_card_custom_link', DB::table('content_static')->where('ID', 'service-card-custom-link')->get())
            ->with('service_card_custom_title', DB::table('content_static')->where('ID', 'service-card-custom-title')->get())
            ->with('twitter_link', DB::table('content_static')->where('ID', 'twitter-link')->get())
            ->with('content_cost', DB::table('content_static')->where('ID', 'content-cost')->get())
            ->with('content_get_starr', DB::table('content_static')->where('ID', 'content-get-starr')->get())
            ->with('phone', DB::table('content_static')->where('ID', 'phone')->get())
            ->with('content_client', DB::table('content_static')->where('ID', 'content-client')->get())
            ->with('partnerships', DB::select('SELECT * FROM reognitions_partnerships order by dataCreate asc ;'));
    }

    public function send_service()
    {
        $full_name = Input::input('full_name');
        $email = Input::input('email');
        $content = Input::input('content');
        $company = Input::input('company');
        DB::table('get_start')->insert([
            'full_name' => $full_name,
            'email' => $email,
            'content' => $content,
            'company' => $company
        ]);
        return redirect()->back();
    }
}
