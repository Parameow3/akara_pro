<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        $plan_id = Subscription::where('user_id', Auth::user()->getAuthIdentifier())->first();
        if ($plan_id == null){
            $plan_name = "Akara Free";
            $plan_price = 0.00;
        }
        else{
            $plan_name = Plan::where('id',$plan_id->name)->value('name');
            $plan_price = Plan::where('id',$plan_id->name)->value('price');
        }

        return view("subscription", compact("plans", "plan_name", "plan_price"));
    }

    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("pay", compact("plan", "intent"));
    }

    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);

        return view("success", compact("plan"));
    }
}
