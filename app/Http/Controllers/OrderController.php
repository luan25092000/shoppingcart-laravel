<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.listOrder',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required'
        ]);
        $key = ['product','color','price','qty'];
        $qty = $request->input('qty');
        $cart = $request->input('cart');
        $product = explode('_',$cart);
        array_push($product,$qty);
        $detail = array_combine($key,$product);
        //  Store data in database
        $order = new Order([
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'total' => $qty * $product['2'],
            'cart' => json_encode($detail),
            'note' => $request->input('note')
        ]);
        $order->save();
        return redirect()->route('order.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $products = Product::all();
        $cart = json_decode($order['cart']);
        return view('admin.orders.editOrder',['order' => $order,'cart' => $cart,'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Form validation
         $this->validate($request, [
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required'
        ]);
        $key = ['product','color','price','qty'];
        $qty = $request->input('qty');
        $cart = $request->input('cart');
        $product = explode('_',$cart);
        array_push($product,$qty);
        $detail = array_combine($key,$product);
        $order = Order::find($id);
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zip = $request->input('zip');
        $order->total = $qty * $product['2'];
        $order->cart = json_encode($detail);
        $order->note = $request->input('note');
        $order->save();
        return redirect()->route('order.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('order.list');
    }

    /**
     * Return add order form
     *
     * @return \Illuminate\Http\Response
     */
    public function addOrderForm()
    {
        $products = Product::all();
        return view('admin.orders.addOrder',['products' => $products]);
    }

}
