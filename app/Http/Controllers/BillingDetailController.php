<?php

namespace App\Http\Controllers;

use App\Models\BillingDetail;
use Illuminate\Http\Request;

class BillingDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BillingDetail::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          //  'order_id'   => 'required|integer|exists:orders,order_id',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'country'    => 'required|string|max:255',
            'city'       => 'required|string|max:255',
            'phone'      => 'required|string|max:20',
            'email'      => 'required|email|max:255',
        ]);

        $billingDetail = BillingDetail::create($request->all());

        return response()->json($billingDetail, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $billingDetail = BillingDetail::findOrFail($id);
    return response()->json($billingDetail);
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $billingDetail = BillingDetail::findOrFail($id);

        $request->validate([
           // 'order_id'   => 'sometimes|required|integer|exists:orders,order_id',
            'first_name' => 'sometimes|required|string|max:255',
            'last_name'  => 'sometimes|required|string|max:255',
            'country'    => 'sometimes|required|string|max:255',
            'city'       => 'sometimes|required|string|max:255',
            'phone'      => 'sometimes|required|string|max:20',
            'email'      => 'sometimes|required|email|max:255',
        ]);

        $billingDetail->update($request->all());

        return response()->json($billingDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $billingDetail = BillingDetail::findOrFail($id);
        $billingDetail->delete();

        return response()->json(null, 204);
    }
}
