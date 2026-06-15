<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        $payments = $admin->payments()->get();
        $sellers = User::role('seller')->get();
        $products = Product::all();
        return view('admin.paymentMethods',compact('payments','sellers','products'));
    }

     public function destroy(int $payment_id)
    {
        $admin = Auth::guard('admin')->user();
        $payment = Payment::find($payment_id);
        if ($payment->admin_id == $admin->id) {
            $payment->delete();
        }

        return redirect()->route('admin.show_payment_methods');
    }

    public function edit(Request $request)
    {
        $payment = $request->validate([
            'name' => 'string|max:50|required',
            'description' => 'string|nullable|max:500'
        ]);
        $admin_id = Auth::guard('admin')->user()->id;
        $payment['admin_id'] = $admin_id;
        Payment::create($payment);
        return redirect()->route('admin.show_payment_methods');
    }
}
