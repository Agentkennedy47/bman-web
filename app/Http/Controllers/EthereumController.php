<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ethereum;

class EthereumController extends Controller
{
    // Display Ethereum route
    public function EthereumPage () {

        $ethereumPage = Ethereum::find(1);

        return view('admin.eCurrency.ethereum', compact('ethereumPage'));
    }

    // Update Ethereum
    public function UpdateEthereum (Request $request) {

        $ethereum_id = $request->id;

        Ethereum::findOrFail($ethereum_id)->update([
            'ethereum_buy' => $request->ethereum_buy,
            'ethereum_sell' => $request->ethereum_sell,
        ]);

        $notification = array(
            'message' => 'Ethereum updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
