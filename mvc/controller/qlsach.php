<?php 
	
	class qlsach extends controller {
		
		public $sach_model;

		function __construct()
		{
			
			$this->sach_model = $this->model("sach_model");
		}

		public function product(){

			$this->view("masterlayout",[
				'page'=>'content/sach/qlsach',
				'type'=>$this->sach_model->get(),
				
			]);
		}

		public function view_insert() {
			$this->view("masterlayout",[
				'page'=>'content/sach/insert_sach',
				
			]);
		}
		public function insert() {
			$result_mess = false;
			if (isset($_POST['submit'])) {

				if(empty($_POST['masach'] && $_POST['tensach'] && $_POST['hinhanh'] && $_POST['theloai'] && $_POST['tacgia'] && $_POST['nxb'] && $_POST['namxb'] && $_POST['soluong'])) {
					$this->view("masterlayout",[
						'page'=>'content/sach/insert_sach',
						'result'=> $result_mess,
					]);
				}
				else {
					$masach = $_POST['masach'];
					$tensach = $_POST['tensach'];
					$hinhanh = $_POST['hinhanh'];
					$theloai = $_POST['theloai'];
					$tacgia = $_POST['tacgia'];
					$nxb = $_POST['nxb'];
					$namxb = $_POST['namxb'];
					$soluong = $_POST['soluong'];
					$kq = $this->sach_model->insert($masach, $tensach, $hinhanh, $theloai, $tacgia, $nxb, $namxb, $soluong);
					$this->view("masterlayout",[
						'page'=>'content/sach/insert_sach',
						'result'=> $kq,
					]);
				}
			}
			else {
				echo 'Vui lòng thực hiện bằng submit button';
			}
		}

		public function edit($masach) {
			$this->view("masterlayout",[
				'page'=>'content/sach/edit_sach',
				'edit'=>$this->sach_model->edit($masach),
			]);
		}

		public function update($masach) {

			$result_mess = false;
			if (isset($_POST['submit'])) {
				if(empty($_POST['masach'] && $_POST['tensach'] && $_POST['hinhanh'] && $_POST['theloai'] && $_POST['tacgia'] && $_POST['nxb'] && $_POST['namxb'] && $_POST['soluong'])) {
					$this->view("masterlayout",[
						'page'=>'content/sach/edit_sach',
						'result'=> $result_mess,
						'edit'=>$this->sach_model->edit($masach),
					]);
				}
				else {
					$masach = $_POST['masach'];
					$tensach = $_POST['tensach'];
					$hinhanh = $_POST['hinhanh'];
					$theloai = $_POST['theloai'];
					$tacgia = $_POST['tacgia'];
					$nxb = $_POST['nxb'];
					$namxb = $_POST['namxb'];
					$soluong = $_POST['soluong'];
					$kq = $this->sach_model->update($masach, $tensach, $hinhanh, $theloai, $tacgia, $nxb, $namxb, $soluong);
					$this->view("masterlayout",[
						'page'=>'content/sach/edit_sach',
						'result'=> $kq,
						'edit'=>$this->sach_model->edit($masach),
					]);
				}
			}
			
		}

		public function delete($masach){
			$kq = $this->sach_model->delete($masach);

			$this->view("masterlayout",[
				'page'=>'content/sach/qlsach',
				'type'=>$this->sach_model->get(),
				'result'=> $kq,
			]);
		}

		public function search(){
			
			if(isset($_POST['submit'])) {
				$masach = $_POST['masach'];
				if(empty($_POST['masach'])) {
					$this->view("masterlayout",[
						'page'=>'content/sach/qlsach',
						'type'=>$this->sach_model->get(),

					]);
				}
				else {
					$this->view("masterlayout",[
						'page'=>'content/sach/qlsach',
						'type'=>$this->sach_model->search($masach),

					]);
				}
			}
			else {
				echo 'Vui lòng sử dụng submit button';
			}
		}

		public function import() {
			if(isset($_POST['submit'])) {
				$file = $_FILES['file']['tmp_name'];

				$objReader = PHPExcel_IOFactory::createReaderForFile($file);
				


			}
		}
	}

 ?>