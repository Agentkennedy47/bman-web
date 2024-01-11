<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BNB;

class BNBController extends Controller
{
    // Display Bitcoin cash route
    public function BNBPage () {

        $bnbPage = BNB::find(1);

        return view('admin.eCurrency.bnb', compact('bnbPage'));
    }

    // Update Bitcoin cash
    public function UpdateBNB (Request $request) {

        $bnb_id = $request->id;

        BNB::findOrFail($bnb_id)->update([
            'bnb_buy' => $request->bnb_buy,
            'bnb_sell' => $request->bnb_sell,
        ]);

        $notification = array(
            'message' => 'BNB updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
