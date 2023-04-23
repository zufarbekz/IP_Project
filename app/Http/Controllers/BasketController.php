<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session('orderId');

        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            return view('basket', compact('order'));
        } else {
            return redirect()->route('index');
        }
    }

    public function basketConfirm(Request $request) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);

        //Validation
        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'phoneNumber' => ['required', 'regex:/9989(0|3|4|9)(\d){7}/', 'string'],
        ]);
        //Validation

        $success = $order->saveOrder($request->email, $request->phoneNumber);

        //Flash
        if ($success) {
            session()->flash('success', 'Your order has been sent for processing');
        } else {
            session()->flash('warning', 'Something went wrong...');
        }
        //Flash

        return redirect()->route('index');
    }

    public function basketPlace($fullPrice) {
        if ($fullPrice == 0) {
            return redirect()->route('basket');
        }
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketAdd($productId) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        $product = Product::find($productId);
        session()->flash('success', $product->name. ' is added to your basket');

        return redirect()->route('basket');
    }

    public function basketRemove($productId) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        $product = Product::find($productId);
        session()->flash('warning', $product->name. ' is deleted from your basket');

        return redirect()->route('basket');
    }
}
