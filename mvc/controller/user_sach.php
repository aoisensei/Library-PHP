<?php 
	session_start();
	class user_sach extends controller {

		public $sach_model;
		public $chitietmt_model;

		function __construct()
		{
			
			$this->sach_model = $this->model("sach_model");
			$this->chitietmt_model = $this->model("chitietmt_model");
		}

		public function product(){

			$this->view("masterlayoutuser",[
				'page'=>'content/sach/user_sach',
				'type'=>$this->sach_model->getSachMuon(),
				
			]);
		}

		public function chitietsach($masach){

			$this->view("masterlayoutuser",[
				'page'=>'content/sach/chitietsach',
				'type'=>$this->sach_model->getById($masach),
				'types'=>$this->sach_model->getById($masach),
				'type_sach'=>$this->sach_model->getById($masach),
			]);
		}

		public function muon_sach($masach){
	
			$thoigiantra = mktime(0, 0, 0, date('m'), date("d")+7, date("Y"));
			
			$madg = $_SESSION['madg'];
			$ngaylapphieu = date('Y-m-d');
			$hantra = date('Y-m-d', $thoigiantra);
			$kq = $this->chitietmt_model->insert($masach, $madg, $ngaylapphieu, $hantra);

			$row = mysqli_fetch_array($this->sach_model->soluong($masach));

			$slsach = $row['soluong'];

			$slmoi = $slsach - 1;

			$this->sach_model->updatesl($slmoi, $masach);

			$this->view("masterlayoutuser",[
				'page'=>'content/sach/chitietsach',
				'result'=> $kq,
				'type'=>$this->sach_model->getById($masach),
				'types'=>$this->sach_model->getById($masach),
				'type_sach'=>$this->sach_model->getById($masach),

			]);

		}

		public function chitietmuon(){

			$this->view("masterlayoutuser",[
				'page'=>'content/muontra/muon',
				'type'=>$this->chitietmt_model->getUser($_SESSION['madg']),
			]);
		}

		public function search(){

			if(isset($_POST['submit'])) {
				$masach = $_POST['masach'];
				if(empty($_POST['masach'])) {
					$this->view("masterlayoutuser",[
						'page'=>'content/muontra/muon',
						'type'=>$this->chitietmt_model->getUser($_SESSION['madg']),
					]);
				}
				else {
					$this->view("masterlayoutuser",[
						'page'=>'content/muontra/muon',
						'type'=>$this->chitietmt_model->search($_SESSION['madg'], $masach),
					]);
				}
			}
			else {
				echo 'Vui lòng sử dụng submit button';
			}

		}
	}

 ?>