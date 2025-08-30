<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\PaymentRequest;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('order:id,shipping_address,total_amount')
            ->select('id', 'order_id', 'payment_method', 'amount', 'payment_date', 'payment_status')
            ->paginate(perPage: 5);

        return view('Admin.payments.index', compact('payments'));
    }

    public function create()
    {
        
        $orders = Order::doesntHave('payment')->get();
        return view('Admin.payments.create', compact('orders'));
    }

    public function store(PaymentRequest $request)
    {
        $validated = $request->validated();

        Payment::create($validated);

        return redirect()->route('payments.index')->with('success', 'Payment created successfully.');
    }

    public function show(Payment $payment)
    {
        $payment->load('order');
        return view('Admin.payments.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        $orders = Order::doesntHave('payment')->orWhere('id', $payment->order_id)->get();
        return view('Admin.payments.edit', compact('payment', 'orders'));
    }

    public function update(PaymentRequest $request, Payment $payment)
    {
        $validated = $request->validated();
        $payment->update($validated);

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }
}
