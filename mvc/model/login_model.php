<?php 

	class login_model extends DB {

		public function login($username){

			$sql ="SELECT * FROM user WHERE username = '{$username}' ";
			return mysqli_query($this->con,$sql);
		}

		public function loginUser($username){

			$sql ="SELECT * FROM docgia WHERE madg = '{$username}' ";
			return mysqli_query($this->con,$sql);
		}
	}

 ?>