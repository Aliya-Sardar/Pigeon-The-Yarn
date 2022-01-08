<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order_dashboard()
    {
        if(Auth::check()){
            // get current users orders
            
            $orders = Order::where('User_Email', Auth::user()->email)->get();
            
            return view('Members.order', [
                    'orders' => $orders]);
        }
  
        return redirect()->route('signin')->withSuccess('Login details are not valid');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_order(Request $request)
    {
        $products = ['Cardigan', 'Shoes', 'Gloves',
                    'Hat', 'Jacket', 'Scarf',
                    'Toy', 'Bag', 'Accessories'];
        foreach($products as $product)
        {
            if($request->input($product))
            {
                $prod_values = explode(' ' ,$request->input($product));
                Order::create([
                    'User_Email' => Auth::user()->email,
                    'Product' => $prod_values[0],
                    'Quantity' => $prod_values[2],
                    'Price' => $prod_values[4],
                ]);
            }
        }

        return redirect()->route('order_dashboard');
    }

}
