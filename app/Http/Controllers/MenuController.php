<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Ingredient;

class MenuController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        return view('index', ['cart' => $cart]);
    }

    public function show()
    {
        $cart = session()->get('cart');
        $pizzas = Pizza::all();
        return view('menu', ['pizzas' => $pizzas, 'cart' => $cart]);
    }

    public function create()
    {
        return view('index');
    }

    public function store()
    {
        return view('index');
    }

    public function edit()
    {
        return view('index');
    }

    public function update()
    {
        return view('index');
    }

    public function order()
    {
        $cart = session()->get('cart');
        $pizzas = Pizza::all();
        return view('order', ['cart' => $cart, 'pizzas' => $pizzas]);
    }

    public function addToOrder(Request $request)
    {
        $pizzaId = $request->input('pizza_id');
        $size = $request->input('size');
        $pizza = Pizza::find($pizzaId);
        $cart = session()->get('cart', []);
        $existingItemIndex = $this->findCartItemIndex($cart, $pizzaId, $size);

        if ($existingItemIndex !== null) {
            // If the pizza with the same size already exists in the cart, increment its quantity
            $cart[$existingItemIndex]['quantity']++;
        } else {
            $cart[] = [
                'pizzaId' => $pizzaId,
                'size' => $size,
                'name' => $pizza->name,
                'price' => $pizza->pizzaPrice->$size,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }


    private function findCartItemIndex($cart, $pizzaId, $size)
    {
        foreach ($cart as $index => $item) {
            if ($item['pizzaId'] == $pizzaId && $item['size'] == $size) {
                return $index;
            }
        }

        return null;
    }

    public function removeFromOrder(Request $request)
    {
        $pizzaId = $request->input('pizza_id');
        $size = $request->input('size');
        $cart = session()->get('cart', []);
        $existingItemIndex = $this->findCartItemIndex($cart, $pizzaId, $size);
        if($existingItemIndex !== null) {
            $cart[$existingItemIndex]['quantity']--;
            if($cart[$existingItemIndex]['quantity'] == 0) {
                unset($cart[$existingItemIndex]);
            }
            session()->put('cart', $cart);
            return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }
}
