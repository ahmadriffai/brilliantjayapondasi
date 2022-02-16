<?php

class Profile extends CI_Controller
{

	public function index()
	{
		return $this->load->view("profile", [
			"title" => "Profile"
		]);
	}

}
