<?php 

	class docgia_model extends DB {

		public function get(){

			$sql ="SELECT * FROM docgia";
			return mysqli_query($this->con,$sql);
		}
		public function insert($madg, $password, $tendg, $diachi, $lop, $masv, $ngaytaothe) {
			$sql ="INSERT INTO `docgia`(`madg`, `password`, `tendg`, `diachi`, `lop`, `masv`, `ngaytaothe`) VALUES ('$madg', '$password', '$tendg', '$diachi', '$lop', '$masv', '$ngaytaothe')";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function edit($madg) {
			$sql ="SELECT * FROM docgia WHERE madg = '{$madg}' ";
			return mysqli_query($this->con,$sql);
		}

		public function update($madg, $password, $tendg, $diachi, $lop, $masv, $ngaytaothe) {
			$sql ="UPDATE `docgia` SET `madg`='{$madg}',`password`='{$password}',`tendg`='{$tendg}',`diachi`='{$diachi}',`lop`='{$lop}',`masv`='{$masv}',`ngaytaothe`='{$ngaytaothe}' WHERE madg = '{$madg}'";
			
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function delete($madg) {
			$sql ="DELETE FROM `docgia` WHERE madg = '{$madg}'";
			
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function search($madg) {
			$sql ="SELECT * FROM docgia WHERE madg LIKE '%$madg%' ";
			return mysqli_query($this->con,$sql);
			
		}
	}

 ?>