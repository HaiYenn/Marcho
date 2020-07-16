<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;
use App\Models\InforUser;
use App\Models\Category;
use App\Models\Order;
use App\Helper\Cart;
use App\Models\OrderDetail;
use App\Models\Wishlist;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function wishlist($id)
    {
        if (Auth::check()) {
            $c = new Wishlist();
            $data = $c->insertdata($id);
            if ($data!=null) {
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function ajax_wishlist($id)
    {
        if (Auth::check()) {
            $c = new Wishlist();
            $data = $c->insertdata($id);

            if ($data!=null) {
                $wishlist = count(Wishlist::where('product_id',$id)->get());
                return view('web.pages.count',[
                    'wishlist'=>$wishlist,
                ]);
            }
        }else{
            return redirect()->route('login');
        }
        $wishlist = Wishlist::paginate(6);
        return view('web/pages/wishlist',compact('wishlist'));
    }
    function test(){
    	return view("masterview");
    }
    function homepage(){
        $products = Product::paginate(4);
    	return view('web/pages/index',compact('products'));
    }
    function blogdetail(){
    	return view('web/pages/blog-detail');
    }
    function bloggrid(){
    	return view('web/pages/blog-grid');
    }
    function bloglist(){
    	return view('web/pages/blog-list');
    }
    function blogstandard(){
    	return view('web/pages/blog-standard');
    }
     function cartpage(){
    	return view('web/pages/cart-page');
    }
     function checkout(){ 
        if (Auth::check()) {
            $pay = Payment::where('status', 1)->get();
            return view('web/pages/checkout', [
                'pay'=>$pay
            ]);
        }else{
            return redirect()->route('login');
        }
    }
    public function checkoutpost(Request $req)
    {
        $infor = new InforUser();
        $model = $infor->store($req);
        $cart = new Cart();
        $total = $cart->total();
        
        $order = new Order();
        $orders = $order->store($total,0,$model->id,$req->payment);
        $order_detail = new OrderDetail();
        foreach (session('cart') as $value) {
            $order_detail->store($orders['id'], $value['pro_id'], $value['quantity'], $value['price']);
        }
        session(['cart'=>[]]);
        return redirect()->route('home');
    }
      function contact(){
    	return view('web/pages/contact');
    }
     function login(){
    	return view('web/pages/login');
    }
      function notfound(){
    	return view('web/pages/notfound');
    }
      function register(){
    	return view('web/pages/register');
    }
      function shopdetail($id){
        $product = Product::where('pro_id',$id)->first();
        $wishlist = Wishlist::where('product_id',$id)->first();
        $size = Size::all();
        $color = Color::all();
    	return view('web/pages/shop-detail',compact('size','color','product','wishlist'));
    }
    

    function shoplist(){
        $products = Product::paginate(6);
        $size = Size::all();
        $color = Color::all();
        $cat = Category::all();

    	return view('web/pages/shop-list',compact('products','size','color','cat'));
    }
     function bestseller(){
    	return view('web/pages/bestseller');
    }
    function trending(){
    	return view('web/pages/trending');
    }
    function shoppage(){
        $products = Product::paginate(6);

    	return view('web/pages/shop-page',compact('products'));
    }
      function shopwith(){
         $products = Product::paginate(6);
        $size = Size::all();
        $color = Color::all();
        $cat = Category::all();
    	return view('web/pages/shop-with',compact('products','size','color','cat'));
    }

    public function postregister(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'status'=> 0,
        ]);
        return redirect()->route('login')->with('ms','Đăng ký thành công');
    }
    public function postlogin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'status'=>0
        ];
        if (Auth::attempt($login)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
      public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}