<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;

class BitcoinController extends Controller
{
    // Display Bitcoin route
    public function BitcoinPage () {

        $bitcoinPage = Bitcoin::find(1);

        return view('admin.eCurrency.bitcoin', compact('bitcoinPage'));
    }

    // Update Bitcoin
    public function UpdateBitcoin (Request $request) {

        $bitcoin_id = $request->id;

        Bitcoin::findOrFail($bitcoin_id)->update([
            'bitcoin_buy' => $request->bitcoin_buy,
            'bitcoin_sell' => $request->bitcoin_sell,
        ]);

        $notification = array(
            'message' => 'Bitcoin updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
