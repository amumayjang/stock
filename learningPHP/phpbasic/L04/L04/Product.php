<?php 
/**
* 
*/
class Product
{
	public $id;
	public $productName;
	public $price;
	
	function __construct($ipId = 0, $ipName = null, $ipPrice = 0)
	{
		$this->id = $ipId;
		$this->productName = $ipName;
		$this->price = $ipPrice;
	}

	function toString($str = null){
		if($this->id == 1){
			echo "tao la admin";
		}else if($this->id == 2){
			echo "Tao la moderator";
		}else{
			echo "Tao la thuong dan";
		}
	
	}
}

 ?>