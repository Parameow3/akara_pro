<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Stripe\Exception\ApiErrorException;

class StripeController extends Controller
{
    /**
     * @throws ApiErrorException
     */
    public function session(Request $request): \Illuminate\Http\RedirectResponse
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $plan = Plan::find($request->plan);

        $productname = $request->get('planname');
        $total = $request->get('total');

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('subscription'),
        ]);



        return redirect()->away($session->url);
    }
}
