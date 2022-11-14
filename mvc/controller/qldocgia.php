<?php 
	
	class qldocgia extends controller {

		public $docgia_model;

		function __construct()
		{
			
			$this->docgia_model = $this->model("docgia_model");
		}

		public function product(){

			$this->view("masterlayout",[
				'page'=>'content/docgia/qldocgia',
				'type'=>$this->docgia_model->get(),
			]);
		}

		public function view_insert() {
			$this->view("masterlayout",[
				'page'=>'content/docgia/insert_docgia',
				
			]);
		}
		public function insert() {
			$result_mess = false;
			if (isset($_POST['submit'])) {

				if(empty($_POST['madg'] && $_POST['password'] && $_POST['tendg'] && $_POST['diachi'] && $_POST['lop'] && $_POST['masv'] && $_POST['ngaytaothe'])) {
					$this->view("masterlayout",[
						'page'=>'content/docgia/insert_docgia',
						'result'=> $result_mess,
					]);
				}
				else {
					$madg = $_POST['madg'];
					$password = $_POST['password'];
					$tendg = $_POST['tendg'];
					$diachi = $_POST['diachi'];
					$lop = $_POST['lop'];
					$masv = $_POST['masv'];
					$ngaytaothe = $_POST['ngaytaothe'];
					
					$kq = $this->docgia_model->insert($madg, $password, $tendg, $diachi, $lop, $masv, $ngaytaothe);
					$this->view("masterlayout",[
						'page'=>'content/docgia/insert_docgia',
						'result'=> $kq,
					]);
				}
			}
			else {
				echo 'Vui lòng thực hiện bằng submit button';
			}
		}

		public function edit($madg) {
			$this->view("masterlayout",[
				'page'=>'content/docgia/edit_docgia',
				'edit'=>$this->docgia_model->edit($madg),
			]);
		}

		public function update($madg) {

			$result_mess = false;
			if (isset($_POST['submit'])) {
				if(empty($_POST['madg'] && $_POST['password'] && $_POST['tendg'] && $_POST['diachi'] && $_POST['lop'] && $_POST['masv'] && $_POST['ngaytaothe'])) {
					$this->view("masterlayout",[
						'page'=>'content/docgia/edit_docgia',
						'result'=> $result_mess,
						'edit'=>$this->docgia_model->edit($madg),
					]);
				}
				else {
					$madg = $_POST['madg'];
					$password = $_POST['password'];
					$tendg = $_POST['tendg'];
					$diachi = $_POST['diachi'];
					$lop = $_POST['lop'];
					$masv = $_POST['masv'];
					$ngaytaothe = $_POST['ngaytaothe'];

					$kq = $this->docgia_model->update($madg, $password, $tendg, $diachi, $lop, $masv, $ngaytaothe);
					$this->view("masterlayout",[
						'page'=>'content/docgia/edit_docgia',
						'result'=> $kq,
						'edit'=>$this->docgia_model->edit($madg),
					]);
				}
			}
			
		}

		public function delete($madg){
			$kq = $this->docgia_model->delete($madg);

			$this->view("masterlayout",[
				'page'=>'content/docgia/qldocgia',
				'type'=>$this->docgia_model->get(),
				'result'=> $kq,
			]);
		}

		public function search(){
			
			if(isset($_POST['submit'])) {
				$madg = $_POST['madg'];
				if(empty($_POST['madg'])) {
					$this->view("masterlayout",[
						'page'=>'content/docgia/qldocgia',
						'type'=>$this->docgia_model->get(),

					]);
				}
				else {
					$this->view("masterlayout",[
						'page'=>'content/docgia/qldocgia',
						'type'=>$this->docgia_model->search($madg),

					]);
				}
			}
			else {
				echo 'Vui lòng sử dụng submit button';
			}
		}
	}

 ?>