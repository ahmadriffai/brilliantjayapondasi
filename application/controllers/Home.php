<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view("index",[
			"title" => "Landing Page"
		]);
	}
	public function profile(){
		return $this->load->view("profile");
	}
}
