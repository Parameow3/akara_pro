<?php

namespace App\Http\Controllers;

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

        $productname = $request->get('planname');
        $totalprice = $request->get('total');
        $two0 = "99";
        $total = "$totalprice$two0";

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
