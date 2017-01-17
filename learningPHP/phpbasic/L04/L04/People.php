<?php 
	/**
	* 
	*/
	class People
	{
		public $id;
		public $ten;
		public $tuoi;
		public $queQuan;
		public $tinhTrangHonNhan;
		public $soDienThoai;
		public $facebook;

		function __construct($id = 0, 
			$name = null, $tuoi = 0, 
			$gender = 0){
			$this->id = $id;
			$this->ten = $name;
			$this->tuoi = $tuoi;
			$this->gioiTinh = $gender;
		}
		function toString(){
			echo "tao thuoc ve people";
		
		}
	}


 ?>