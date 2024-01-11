<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USDT;

class USDTController extends Controller
{
    // Display USDT route
    public function USDTPage () {

        $usdtPage = USDT::find(1);

        return view('admin.eCurrency.usdt', compact('usdtPage'));
    }

    // Update USDT
    public function UpdateUSDT (Request $request) {

        $usdt_id = $request->id;

        USDT::findOrFail($usdt_id)->update([
            'usdt_buy' => $request->usdt_buy,
            'usdt_sell' => $request->usdt_sell,
        ]);

        $notification = array(
            'message' => 'USDT updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
