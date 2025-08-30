<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a list of shipments with their related orders.
     */
    public function index()
    {
        $shipments = Shipment::with('order')->latest()->paginate(10);
        return view('Admin.shipments.index', compact('shipments'));
    }

    /**
     * Show the form for editing a specific shipment.
     */
    public function edit(Shipment $shipment)
    {
        return view('Admin.shipments.edit', compact('shipment'));
    }

    /**
     * Update the shipment status and date.
     */
    public function update(Request $request, Shipment $shipment)
    {
        $data = $request->validate([
            'status' => 'required|in:Pending,In Transit,Delivered,Returned',
            'shipment_date' => 'nullable|date',
        ]);

        $shipment->update($data);

        return redirect()->route('shipments.index')
            ->with('success', 'Shipment updated successfully.');
    }
}
