<?php

class Galery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Galery_model");
		$this->load->library("form_validation");
	}

	public function index(){
		$data = [
			"galery" => $this->Galery_model->getRows()
		];
		return $this->load->view("galery", $data);
	}

	public function upload()
	{
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
		$data = [
			"galery" => $this->Galery_model->getRows()
		];

		$this->load->view("upload-gambar", $data);
	}

	public function insert()
	{
		if (!empty($_FILES)){
			$uploadPath = "/uploads";

			$array = explode(".",$_FILES["file"]["name"]);
			$fileName = uniqid("pt") . "." . end($array);

			$url = $uploadPath . "/" . $fileName;


			$config["upload_path"] = $uploadPath;
			$config["allowed_types"] = "jpg|jpeg|png";
			$config["max_size"] = "1024";
			$config["file_name"] = $fileName;

			$this->load->library("upload", $config);
			$this->upload->initialize($config);


			if ($this->upload->do_upload("files")){
				$fileData = $this->upload->data();

				$uploadData["url"] = $url;
				$uploadData["created_at"] = date("Y-m-d H:i:s");

				$insert = $this->Galery_model->insert($uploadData);
			}


		}else{
			echo "kosong";
		}
	}

}
