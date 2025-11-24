<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Flutterwave;
use Flutterwave\Flutterwave as FlutterwaveAlias;

class DonationController extends Controller
{
    public function pay(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric|min:100',
        ]);

        $donation = Donation::create($request->all());
        $reference = uniqid('fw_');

        $payload = [
            'tx_ref' => $reference,
            'amount' => $donation->amount,
            'currency' => 'RWF',
            'redirect_url' => route('donate.flutterwave.callback'),
            'customer' => [
                'email' => $donation->email,
                'name' => $donation->name
            ],
            'payment_options' => 'card,mobilemoneyrwanda',
        ];

        $flutterwave = new FlutterwaveAlias();
        $payment = $flutterwave->payments()->initialize($payload);

        return redirect($payment['data']['link']);
    }

    public function flutterwaveCallback(Request $request)
    {
        $tx_id = $request->transaction_id;
        $status = $request->status;

        $donation = Donation::where('transaction_id', $tx_id)->first();

        if ($status === 'successful' && $donation) {
            $donation->update(['status' => 'paid']);
            return redirect()->route('donate.thankyou');
        }

        return redirect()->back()->with('error', 'Payment failed or cancelled.');
    }
}
