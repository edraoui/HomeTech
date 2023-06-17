<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Mail;
use App\Mail\DemoMail;

class AdminOrdersComponent extends Component
{
    use WithPagination;

    public $order_id;

    public function acceptOrder(){
        $order = Order::find($this->order_id);
        $order->status = 'Accepted';
        $order->save();
        session()->flash('message','Order has been accepted successfully');

        $mailData = [
            'title' => 'My boutique ',
            'order_id' =>  $order->id,
            'order_total' =>  $order->total,
            'order_status' =>  $order->status,
            'order_date' =>  $order->created_at,
        ];
        Mail::to('alaebenhamza3@gmail.com')->send(new DemoMail($mailData));
    }

    public function refuseOrder(){
        $order = Order::find($this->order_id);
        $order->status = 'Refused';
        $order->save();
        session()->flash('message','Order has been refused successfully');

        $mailData = [
            'title' => 'My boutique ',
            'order_id' =>  $order->id,
            'order_total' =>  $order->total,
            'order_status' =>  $order->status,
            'order_date' =>  $order->created_at,
        ];
        Mail::to('alaebenhamza3@gmail.com')->send(new DemoMail($mailData));
    }

    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(10);
        $total = Order::sum('total');
        return view('livewire.admin.admin-orders-component',['orders'=>$orders, 'total'=>$total]);
    }
}
