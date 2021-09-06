<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index(){
        $data = Product::orderBy('id', 'DESC')->skip(0)->take(8)->get();
        $all_data = Product::all();
        return view("Product",['Products'=>$data,'all_Products'=>$all_data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view("detail",['Products'=>$data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        $category = $req->input('query');
        return view("search",['Products'=>$data,'category'=>$category]);
       
    }
    Public function AddToCart(Request $req)
    {
        if($req->session()->has('user')){
            $cart = new cart;
            $cart->user_id = session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
            //return 'hello';
        }else{
            return redirect('/login');
        }
    }
    static function CartItem(){ 

        $userId=Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }
    function CartList(){
        $userId=Session::get('user')['id'];
        $products = DB::table('Cart')->join('Products','Cart.product_id','=','Products.id')
        ->where('Cart.user_id',$userId)->select('Products.*','Cart.id as cart_id')->get();
        return view('cartlist',['Products'=>$products]);
    }
    function RemoveCart($id){
        cart::destroy($id);
        return redirect('cartlist'); 
    }
    function OrderNow($id){
        $data = Product::find($id);
        session()->put('products',$data);
        return view('ordernow',['products'=>$data]);
    }
    function OrderPlace(Request $req){
            $userId=Session::get('user')['id'];
            $Product_id = Session::get('products')['id'];
            $order= new order;
            $order ->user_id=$userId;
            $order ->product_id = $Product_id;
            $order ->firstName = $req->firstName;
            $order ->lastName = $req->lastName;
            $order ->city = $req->city;
            $order ->phone = $req->phone;
            $order ->quantity = $req->quantity;
            $order ->payment_method= $req->payment;
            $order->status="pending";
            $order->address=$req->address;
            $order->save();
            cart::where('user_id',$userId)->delete();
        return redirect("/");
    }
    function MyOrders(){
        
        $userId=Session::get('user')['id'];
        $orders=DB::table('orders')->join('Products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)->get();
        return view('myorders',['order'=>$orders]);
    }
    function Mobiles(){
        $mobiles = DB::table('products')->where('category','mobile')->get();
        return view('mobiles',['mobiles'=>$mobiles]);
    }
    function Airpods(){
        $airpod = DB::table('products')->where('category','airpod')->get();
        return view('airpods',['mobiles'=>$airpod]);
    }
    function CasessCovers(){
        $casessCovers = DB::table('products')->where('category','casessCovers')->get();
        return view('casessCovers',['mobiles'=>$casessCovers]);
    }
    function Headphones(){
        $headphones = DB::table('products')->where('category','headphones')->get();
        return view('headphones',['mobiles'=>$headphones]);
    }
    function HomeSecurity(){
        $homeSecurity = DB::table('products')->where('category','homeSecurity')->get();
        return view('homeSecurity',['mobiles'=>$homeSecurity]);
    }
    function KeyboardMouse(){
        $keybordMouse = DB::table('products')->where('category','keyboardMouse')->get();
        return view('KeybordMouse',['mobiles'=>$keybordMouse]);
    }
    function Laptops(){
        $mobiles = DB::table('products')->where('category','laptops')->get();
        return view('laptops',['mobiles'=>$mobiles]);
    }
    function PowerBanks(){
        $powerBanks = DB::table('products')->where('category','powerBanks')->get();
        return view('powerBanks',['mobiles'=>$powerBanks]);
    }
    function Speakers(){
        $speakers = DB::table('products')->where('category','speakers')->get();
        return view('speakers',['mobiles'=>$speakers]);
    }
    function Tablets(){
        $tablets = DB::table('products')->where('category','tablets')->get();
        return view('tablets',['mobiles'=>$tablets]);
    }
    function Order(){
        $orders=DB::table('Products')->join('orders','Products.id','=','orders.product_id')->get();

        return view('order',['total'=>$orders]);
    }
    function Delete($id){
        order::destroy($id);
        return redirect('order');
    }

    function AddProducts_show(){
        return view("addProduct");
    }
    function AddProducts(Request $req){
         $add_product = new Product;
         $name = $req->name;
         $price = $req->price;
         $oldPrice = $req->oldPrice;
         $category = $req->category;
         $description = $req->description;
         $gallery = $req->gallery;
         if(empty($name) or empty($price) or empty($oldPrice) or empty($category) or  empty($description) or empty($gallery)){
             $error = " All * Fields are Required ";
             return view('addProduct',['error'=>$error]);
         }else{
            $add_product->name = $name;
            $add_product->price = $price;
            $add_product->oldPrice = $oldPrice;
            $add_product->category = $category;
            $add_product->description = $description;
            $add_product->gallery = $gallery;
            $add_product->save();
            $mesg = " your Product added ! ";
            return view('addProduct',['mesg'=>$mesg]);
         }
    }
    function lobiles(){
        $mobiles = DB::table('products')->where('category','mobile')->get();
        return view('index',['mobiles'=>$mobiles]);
    }

    
}
