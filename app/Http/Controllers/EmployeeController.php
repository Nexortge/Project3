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
        $orderAmount = $orderAmount - Order::where('status', 'completed and is ready for pickup')->count();
        $orderAmount = $orderAmount - Order::where('status', 'cancelled')->count();
        return view('employee/employeeIndex', ['orderAmount' => $orderAmount]);
    }

    public function orders()
    {
        $pizzas = Pizza::all();
        $orders = Order::all();
        $orders = $orders->where('status', '!=', 'completed and is ready for pickup');
        $orders = $orders->where('status', '!=', 'cancelled');
        return view('employee/employeeOrders', ['orders' => $orders, 'pizzas' => $pizzas]);
    }

    public function completeOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = 'completed and is ready for pickup';
        $order->save();
        return redirect()->route('employeeOrders');
    }

    public function removeOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = 'cancelled';
        $order->save();
        return redirect()->route('employeeOrders');
    }

    public function NextStatus(request $request)
    {
        $pizzas = Pizza::all();
        $order = Order::find($request->order_id);
        switch ($order->status){
            case 'preparing':
                $order = Order::find($request->order_id);
                $order->status = 'in oven';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            case 'in oven':
                $order = Order::find($request->order_id);
                $order->status = 'baked';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            case 'baked':
                $order = Order::find($request->order_id);
                $order->status = 'ready for delivery';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            case 'ready for delivery':
                $order = Order::find($request->order_id);
                $order->status = 'preparing';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            default:
                return redirect()->route('employeeOrders');
                break;

        }
    }
    public function PreviousStatus(request $request)
    {
        $pizzas = Pizza::all();
        $order = Order::find($request->order_id);
        switch ($order->status){
            case 'preparing':
                $order = Order::find($request->order_id);
                $order->status = 'ready for delivery';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            case 'in oven':
                $order = Order::find($request->order_id);
                $order->status = 'preparing';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            case 'baked':
                $order = Order::find($request->order_id);
                $order->status = 'in oven';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            case 'ready for delivery':
                $order = Order::find($request->order_id);
                $order->status = 'baked';
                $order->save();
                return redirect()->route('employeeOrders');
                break;
            default:
                return redirect()->route('employeeOrders');
                break;
        }
    }
}
