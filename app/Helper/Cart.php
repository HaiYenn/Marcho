<?php 
namespace App\Helper;

class Cart
{
	//$items lưu trữ các thông tin sản phẩm
	public $items;

	public function __construct()
	{
		$this->items = session('cart');
	}
	//hàm thêm sản phẩm
	public function add($data,$quantity=1){
		if(isset($this->items[$data['pro_id']])){
			$this->items[$data['pro_id']]['quantity'] +=$quantity;
		}
		else{
			$this->items[$data['pro_id']] = $data;
			$this->items[$data['pro_id']]['quantity'] = $quantity;
		}

		//Session trong laravel
		session([
			'cart' => $this->items //add thêm mới
		]);
	}
	//hàm xóa sản phẩm trong giỏ hàng
	public function delete_cart($id){
		if($this->items[$id]){
			unset($this->items[$id]);
			session(['cart'=>$this->items]);
			return true;
		}else{
			return false;
		}
	}
	//hàm update số lượng trong giỏ hàng
	public function update_carts($id,$quantity){
		$quantity = is_numeric($quantity) ? $quantity :1;
		$quantity = $quantity > 0 ? ceil($quantity) : 1;
		if(isset($this->items[$id])){
			$this->items[$id]['quantity'] = $quantity;
			session(['cart'=>$this->items]);
		}
	}
	//hàm xóa toàn bộ giỏ hàng
	public function clear_cart(){
		session(['cart'=>[]]);
	}
	//hàm tính tổng tiền tất cả sản phẩm trong giỏ hàng
	public function total(){
		$tong = 0;

		if (count($this->items)){
			foreach ($this->items as $items) {
				$tong = $tong+($items['quantity']*$items['price']);
			}
		}
		return $tong;
	}
}


 ?>