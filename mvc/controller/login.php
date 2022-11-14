<?php 
	
	class login extends controller {

		public $login_model;
		public $sach_model;

		function __construct()
		{
			$this->login_model = $this->model("login_model");
			$this->sach_model = $this->model("sach_model");
		}

		public function product(){

			$this->viewlogin("admin/login",[]);
		}

		public function login(){
			$result_mess = false;
			

			if(isset($_POST['submit'])) {

				$username = $_POST['username'];
				$password_input = $_POST['password'];
				if(empty($_POST['username']) || empty($_POST['password'])) {
					$this->viewlogin("admin/login",[
						'result'=>$result_mess,
					]);
				}

				$result = $this->login_model->login($username);
				$docgia = $this->login_model->loginUser($username);
				if(mysqli_num_rows($result)) {
					while($row = mysqli_fetch_array($result)) {
						
						$username = $row['username'];
						$password = $row['password'];
					}
					if($password === $password_input) {
						
						$this->view("masterlayout",[
							'page'=>'content/sach/qlsach',
							'type'=>$this->sach_model->get(),
						]);
					}
					else {
						$this->viewlogin("admin/login",[
							'result'=>$result_mess,
						]);
					}
				}
				else if(mysqli_num_rows($docgia)) {
					while($rows = mysqli_fetch_array($docgia)) {
						session_start();
						$_SESSION['madg'] = $username;
						$username = $rows['madg'];
						$password = $rows['password'];
						
					}
					
					if($password === $password_input) {
						$this->view("masterlayoutuser",[
							'page'=>'content/sach/user_sach',
							'type'=>$this->sach_model->getSachMuon(),
							
						]);
					}
					else {
						$this->viewlogin("admin/login",[
							'result'=>$result_mess,
						]);
					}
				}
				else {
					$this->viewlogin("admin/login",[
						'result'=>$result_mess,
					]);
				}
			}
			else {
				$this->viewlogin("admin/login",[]);
			}
		}

	}

 ?>