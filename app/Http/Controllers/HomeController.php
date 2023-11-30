<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plan_id = Subscription::where('user_id', Auth::user()->getAuthIdentifier())->first();
        if ($plan_id == null)
            $plan_name = "Akara Free";
        else{
            $plan_name = Plan::where('id',$plan_id->name)->value('name');
        }


        return view('home', compact('plan_name'));
    }
}
