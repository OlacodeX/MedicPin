<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\pharmacy;
use App\StoreCart;
use App\Messages;
use App\hospitals;
use Cart;
class CartController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('role:ROLE_SUPERADMIN');
    }
  
    public function add(pharmacy $drug)
    {
        //$qty = $_GET['qty'];
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $drug->id,
            'name' => $drug->name,
            'price' => $drug->price,
            'quantity' =>'1',
            'attributes' => array(),
            'associatedModel' => $drug
        ));
$check = StoreCart::where('drug_id',$drug->id)->where('user_id',auth()->user()->id)->first();
if (!empty($check)) {
    $check->quantity = $check->quantity + '1';
    $check->price = ($check->quantity) * $drug->price;
    $check->save();
    return redirect()->route('cart.index');
}
else{
        $Store = new StoreCart;
        $Store->drug_id = $drug->id;
        $Store->user_id = auth()->user()->id;
        $Store->drug_name = $drug->name;
        $Store->price = $drug->price;
        $Store->img = $drug->img;
        $Store->description = $drug->description;
        $Store->quantity = '1';
       // $Store->price_sum = $qty * $product->price;
         //Save to db
         $Store->save();
       

        return redirect()->route('cart.index');
    }

    }
    public function index()
    {

        $cartItems = StoreCart::orderBy('created_at', 'desc')->where('user_id',auth()->user()->id)->paginate(8);
        $cartsum = StoreCart::where('user_id', auth()->user()->id)->sum('price_sum', 'double precision');
        //$hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'cartsum' => $cartsum,
            'cartItems' => $cartItems,
            //'hospital' => $hospital,
            'new_messages' => $new_messages
        );
           //return view("Posts.index"); 
        return view('cart.index')->with($data);
    }
    public function checkout()
    {
        

        $cartItems = StoreCart::orderBy('created_at', 'desc')->where('user_id',auth()->user()->id)->paginate(8);
        //$hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'cartItems' => $cartItems,
            //'hospital' => $hospital,
            'new_messages' => $new_messages
        );
          return view('cart.checkout', $data);
    }

    public function delete()
    {
        $id= $_GET['id'];
        $item = StoreCart::find($id);
        $item->delete();
        return back();
    }
}
