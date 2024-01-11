<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BitcoinCash;

class BitcoincashController extends Controller
{
    // Display Bitcoin cash route
    public function BitcoincashPage () {

        $bitcoincashPage = BitcoinCash::find(1);

        return view('admin.eCurrency.bitcoincash', compact('bitcoincashPage'));
    }

    // Update Bitcoin cash
    public function UpdateBitcoincash (Request $request) {

        $bitcoincash_id = $request->id;

        BitcoinCash::findOrFail($bitcoincash_id)->update([
            'bitcoin_cash_buy' => $request->bitcoin_cash_buy,
            'bitcoin_cash_sell' => $request->bitcoin_cash_sell,
        ]);

        $notification = array(
            'message' => 'Bitcoin Cash updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
