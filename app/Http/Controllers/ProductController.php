<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->get();
        return view('product-table')->with('product',$product);
    }

    /**
     * Add to cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        return redirect()->route('product.table',['id' => $product->id]);
    }

    /**
     * Show item in cart
     *
     * @return \Illuminate\Http\Response
     */
    public function getCart(){
        if(!Session::has('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    /**
     * Checkout
     *
     * @return \Illuminate\Http\Response
     */
    public function getCheckout(){
        if(!Session::has('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

     /**
     * Delete item in cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteItem(Request $request,$id){
        $products = Session::get('cart');
        foreach ($products as $product)
            {
                foreach($product as $item){
                    if ($item['item']['id'] == $id) 
                        {                
                            unset($products);            
                        }
                }
            }
        //put back in session array without deleted item
        $request->session()->push('cart',$products);
        //then you can redirect or whatever you need
        return redirect()->back();
    }
}
