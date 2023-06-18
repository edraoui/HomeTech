<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutComponent extends Component
{
    public function validateOrder(){
        $order = new Order();
        $order->total = Cart::total();
        $order->save();
        Cart::destroy();
        session()->flash('message','Order has been added');
        return view('livewire.shop-component');
    }

    public function render()
    {
        return view('livewire.checkout-component');
    }
}
