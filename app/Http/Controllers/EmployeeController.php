<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Pizza;
class EmployeeController extends Controller
{
    public function index()
    {
        $orderAmount = Order::count();
        $orderAmount = $orderAmount - Order::where('status', 'completed')->count();
        return view('employee/employeeIndex', ['orderAmount' => $orderAmount]);
    }

    public function orders()
    {
        $pizzas = Pizza::all();
        $orders = Order::all();
        $orders = $orders->where('status', '==', 'preparing');
        return view('employee/employeeOrders', ['orders' => $orders, 'pizzas' => $pizzas]);
    }

    public function completeOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = 'completed';
        $order->save();
        return redirect()->route('employeeOrders');
    }

    public function removeOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->delete();
        return redirect()->route('employeeOrders');
    }
}
