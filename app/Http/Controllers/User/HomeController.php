<?php 
namespace App\Http\Controllers\User;
use App\Helper\Cart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Users_ranks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	public function add_cart($id,Request $req,Cart $cart)
	{
		$product = Product::find($id)->toArray();
		$cart->add($product,$req->quantity);
		return redirect()->route('cart_page')->with('success','thêm vào giỏ hàng thành công');
	}

	public function view_cart(Cart $cart)
	{
		return view('web/pages/cart-page',[
			'cart' =>$cart
		]);
	}
	public function wishlist()
	{
		$wishlist = Wishlist::where('user_id', Auth::user()->id)->paginate(6);
		return view('web/pages/wishlist',[
			'wishlist'=>$wishlist
		]);
	}
	public function update_cart(Cart $cart,Request $request)
	{
		$cart->update_carts($request->id,$request->quantity);
		return back();	
	}
	public function delete_cart($id, Cart $cart)
	{
		$cart->delete_cart($id);
		return back();
	}
	public function delete_all_cart(Cart $cart)
	{
		$cart->clear_cart();
		return back();
	}
	public function rating(Request $request)
	{
		$star = $request->star;
		$pro_id = $request->pro_id;
		// $user_id = Auth::user()->id;
		Users_ranks::create([
			'rank'=>$star,
			'proDetail_id'=>$pro_id,
			'id'=>1
		]);
	}
}
 ?>
