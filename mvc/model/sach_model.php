<?php 

	class sach_model extends DB {

		public function get(){

			$sql ="SELECT * FROM sach";
			return mysqli_query($this->con,$sql);
		}

		public function getSachMuon(){

			$sql ="SELECT * FROM sach WHERE soluong > 0 ";
			return mysqli_query($this->con,$sql);
		}

		public function getById($masach){

			$sql ="SELECT * FROM sach WHERE masach = '{$masach}' ";
			return mysqli_query($this->con,$sql);
		}

		public function soluong($masach){

			$sql ="SELECT soluong FROM sach WHERE masach = '{$masach}' ";
			return mysqli_query($this->con,$sql);
		}

		public function updatesl($soluong, $masach){

			$sql ="UPDATE `sach` SET `soluong`='{$soluong}' WHERE masach = '{$masach}'";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function insert($masach, $tensach, $hinhanh, $theloai, $tacgia, $nxb, $namxb, $soluong) {
			$sql ="INSERT INTO `sach`(`masach`, `tensach`, `hinhanh`, `theloai`, `tacgia`, `nxb`, `namxb`, `soluong`) VALUES ('$masach', '$tensach', '$hinhanh', '$theloai', '$tacgia', '$nxb', '$namxb', '$soluong')";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function edit($masach) {
			$sql ="SELECT * FROM sach WHERE masach = '{$masach}' ";
			return mysqli_query($this->con,$sql);
		}

		public function update($masach, $tensach, $hinhanh, $theloai, $tacgia, $nxb, $namxb, $soluong) {
			$sql ="UPDATE `sach` SET `masach`='{$masach}',`tensach`='{$tensach}',`hinhanh`='{$hinhanh}',`theloai`='{$theloai}',`tacgia`='{$tacgia}',`nxb`='{$nxb}',`namxb`='{$namxb}',`soluong`='{$soluong}' WHERE masach = '{$masach}'";
			
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function delete($masach) {
			$sql ="DELETE FROM `sach` WHERE masach = '{$masach}'";
			
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function search($masach) {
			$sql ="SELECT * FROM sach WHERE masach LIKE '%$masach%' ";
			return mysqli_query($this->con,$sql);
			
		}
	}

 ?>