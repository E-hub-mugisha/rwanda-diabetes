<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Flutterwave;
use Flutterwave\Flutterwave as FlutterwaveAlias;
use Illuminate\Support\Facades\Http;

class DonationController extends Controller
{

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

    public function verify(Request $request)
    {
        $transactionId = $request->transaction_id;

        $res = Http::withToken(env('FLW_SECRET_KEY'))
            ->get("https://api.flutterwave.com/v3/transactions/{$transactionId}/verify")
            ->json();

        if ($res['status'] === 'success' && $res['data']['status'] === 'successful') {

            Donation::create([
                'transaction_id' => $transactionId,
                'name' => $res['data']['customer']['name'],
                'email' => $res['data']['customer']['email'],
                'phone' => $res['data']['customer']['phone_number'],
                'amount' => $res['data']['amount'],
                'status' => 'paid'
            ]);

            return redirect()->back()->with('success', 'Thank you for your donation!');
        }

        return redirect()->back()->with('error', 'Payment verification failed.');
    }
}
