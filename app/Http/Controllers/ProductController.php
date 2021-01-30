<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.listProduct',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.editProduct',['product' => $product]);
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
            'img' => 'required',
            'product-name' => 'required',
            'price' => 'required'
        ]);
        //  Store data in database
        $product = new Product([
            'imagePath' => $request->input('img'),
            'name' => $request->input('product-name'),
            'price' => $request->input('price'),
            'color' => $request->input('color') 
        ]);
        $product->save();
        return redirect()->route('product.list');
    }
    
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
        if(Auth::check()){
            $product = Product::find($id);
            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($product,$product->id);
            $request->session()->put('cart',$cart);
            return redirect()->route('product.table',['id' => $product->id])->with('success','Add product ');
        }else{
            return redirect()->route('sign-in');
        }
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
     * Pay
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request){
        if(!Session::has('cart')){
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $key = ['product','color','price','qty'];
        $detail = [];
        foreach($cart->items as $item){
            $product = [];
            array_push($product,$item['item']['name'],$item['item']['color'],$item['price'],$item['qty']);
            array_push($detail, array_combine($key,$product));
        }
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zip = $request->input('zip');
        $order->note = $request->input('note');
        $order->cart = json_encode($detail);
        $order->total = $cart->totalPrice;
        
        $order->save();

        Session::forget('cart');
        return redirect()->route('index')->with('success', 'Successfully purchased products');
    }

     /**
     * Delete item in cart
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deleteItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('cart');
    }

    /**
     * Decrease item in cart
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function decreaseItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->decreaseItemByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('cart');
    }

    /**
     * Increase item in cart
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function increaseItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseItemByOne($id);
        Session::put('cart',$cart);
        return redirect()->route('cart');
    }

    /**
     * Search product
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchProduct(Request $request)
    {
       $keyword = $request->get('key');
       $results = Product::where('name','LIKE','%'.$keyword.'%')->get();
       return view('search',['results' => $results, 'keyword' => $keyword]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.list');
    }

    /**
     * Return product add form
     *
     * @return \Illuminate\Http\Response
     */
    public function addProductForm()
    {
        return view('admin.products.addProduct');
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
            'img' => 'required',
            'product-name' => 'required',
            'price' => 'required'
        ]);

        $product = Product::find($id);
        $product->imagePath = $request->input('img');
        $product->name = $request->input('product-name');
        $product->price = $request->input('price');
        $product->color = $request->input('color');
        $product->save();
        return redirect()->route('product.list');
    }

}
