<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use Session;
use App\Models\Cart;
use Stripe\Stripe;
use Stripe\Charge;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $users= User::all(); 
      // return view('pages.clothes')->with('users',$users);

      //$product= Product::all(); 
      // return view('pages.clothes')->with('product',$product);

      $product = Product::orderby('id','asc')->paginate(10);
      return view('pages.clothes')->with('product',$product);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
        $product = Product::find($id);
        return view('pages.product')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart', $cart);
      //  dd($request->session()->get('cart'));
      return redirect()->back();

    }

    public function getCart(){
        if (!Session::has('cart')){
            return view('pages.shopping-cart', ['products'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.shopping-cart',['products' =>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }

    public function getCheckOut(){
        if (!Session::has('cart')){
            return view('pages.shopping-cart', ['products'=>null]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('pages.checkout',['total'=>$total,'products' =>$cart->items]);
    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')){
            return redirect()->route('product.shoppingCart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_51IjVYtKR6vGMHmLbn4AmcrU5dwfxjjWQzetTHzT4nQYNEBhf4TGwNnzCLvA9NLwpen8VKOVQaR0w3gBjzTbDaExg00LILLkunT');
        try{
            Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => 'GBP',
                "source" =>'tok_visa',
                "description" => "test charge"
            ));
        } 
        catch (\Exception $e){
            return redirect()->route('checkout')->with('error',$e->getMessage());
        }

        Session::forget('cart');
        return view('pages.index')->with('success', 'Successfully purchased your items!');
    }

}
