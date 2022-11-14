<?php 
	
	class chitietmt extends controller {

		public $chitietmt_model;
		public $sach_model;

		function __construct()
		{
			$this->sach_model = $this->model("sach_model");
			$this->chitietmt_model = $this->model("chitietmt_model");
		}

		public function product(){

			$this->view("masterlayout",[
				'page'=>'content/muontra/chitietmt',
				'type'=>$this->chitietmt_model->get(),
			]);
		}

		

		public function edit($maphieu) {
			$this->view("masterlayout",[
				'page'=>'content/muontra/giahan',
				'edit'=>$this->chitietmt_model->edit($maphieu),
			]);
		}

		public function update($maphieu) {

			$result_mess = false;
			if (isset($_POST['submit'])) {
				if(empty($_POST['hantra'])) {
					$this->view("masterlayout",[
						'page'=>'content/muontra/giahan',
						'result'=> $result_mess,
						'edit'=>$this->chitietmt_model->edit($maphieu),
					]);
				}
				else {
					$hantra = $_POST['hantra'];
					

					$kq = $this->chitietmt_model->update($maphieu, $hantra);
					$this->view("masterlayout",[
						'page'=>'content/muontra/giahan',
						'result'=> $kq,
						'edit'=>$this->chitietmt_model->edit($maphieu),
					]);
				}
			}
			
		}

		public function delete($maphieu, $masach){

			$ngaytra = date('Y-m-d');

			$kq = $this->chitietmt_model->delete($maphieu, $ngaytra);

			$rows = mysqli_fetch_array($this->sach_model->soluong($masach));

			$slhientai = $rows['soluong'];

			$slsau = $slhientai + 1;

			$this->sach_model->updatesl($slsau, $masach);

			$this->view("masterlayout",[
				'page'=>'content/muontra/chitietmt',
				'type'=>$this->chitietmt_model->get(),
				'result'=> $kq,
			]);
		}

		public function search_madg(){

			if(isset($_POST['submit'])) {
				$madg = $_POST['madg'];
				if(empty($_POST['madg'])) {
					$this->view("masterlayout",[
						'page'=>'content/muontra/chitietmt',
						'type'=>$this->chitietmt_model->get(),
					]);
				}
				else {
					$this->view("masterlayout",[
						'page'=>'content/muontra/chitietmt',
						'type'=>$this->chitietmt_model->searchByMadg($madg ),
					]);
				}
			}
			else {
				echo 'Vui lòng sử dụng submit button';
			}

		}
	}

 ?>