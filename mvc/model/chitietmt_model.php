<?php 

	class chitietmt_model extends DB {

		public function get(){

			$sql ="SELECT * FROM chitietmuontra WHERE ngaytra IS NULL ";
			return mysqli_query($this->con,$sql);
		}

		public function getUser($madg){

			$sql ="SELECT * FROM chitietmuontra WHERE madg = '{$madg}' ";
			return mysqli_query($this->con,$sql);
		}

		public function insert($masach, $madg, $ngaylapphieu, $hantra) {
			$sql ="INSERT INTO `chitietmuontra`(`masach`, `madg`, `ngaylapphieu`, `hantra`) VALUES ('$masach', '$madg', '$ngaylapphieu', '$hantra')";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function edit($maphieu) {
			$sql ="SELECT * FROM chitietmuontra WHERE maphieu = '{$maphieu}' ";
			return mysqli_query($this->con,$sql);
		}

		public function update($maphieu, $hantra) {
			$sql ="UPDATE `chitietmuontra` SET `hantra`='{$hantra}' WHERE maphieu = '{$maphieu}'";
			
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function delete($maphieu, $ngaytra) {
			$sql ="UPDATE `chitietmuontra` SET `ngaytra`='{$ngaytra}' WHERE maphieu = '{$maphieu}'";
			
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}

		public function search($madg, $masach) {
			$sql ="SELECT * FROM chitietmuontra WHERE madg = '{$madg}' AND masach LIKE '%$masach%' ";
			return mysqli_query($this->con,$sql);
			
		}

		public function searchByMadg($madg) {
			$sql ="SELECT * FROM chitietmuontra WHERE madg LIKE '%$madg%' ";
			return mysqli_query($this->con,$sql);
			
		}
	}

 ?>