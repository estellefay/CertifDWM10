<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery as Delivery;

class DeliveryController extends Controller
{
    public function insertDeliveryAction(Request $request)
    {
        $newDelivery = new Delivery;
        $newDelivery->name = $request->input('name');
        $newDelivery->save();
        return redirect('/deliveries');
    }

    public function deleteDelivery(Request $request)
    {
        Delivery::destroy($request->input('id'));
        return redirect('/deliveries');
    }
}
