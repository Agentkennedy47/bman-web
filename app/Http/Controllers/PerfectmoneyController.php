<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfectmoney;

class PerfectmoneyController extends Controller
{
    // Display Perfectmoney route
    public function PerfectmoneyPage () {

        $perfectmoneyPage = Perfectmoney::find(1);

        return view('admin.eCurrency.perfectmoney', compact('perfectmoneyPage'));
    }

    // Update Perfectmoney
    public function UpdatePerfectmoney (Request $request) {

        $perfectmoney_id = $request->id;

        Perfectmoney::findOrFail($perfectmoney_id)->update([
            'pm_buy' => $request->pm_buy,
            'pm_sell' => $request->pm_sell,
        ]);

        $notification = array(
            'message' => 'Perfect money updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
