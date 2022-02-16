<?php

class Galery_model extends CI_Model
{

	public function __construct()
	{
		$this->tableName = "galery";
	}

	public function getRows(){
		return $this->db->get("galery")->result();

	}

	public function insert($galery){
		$insert = $this->db->insert("galery" ,$galery);
		return $insert?true:false;
	}
}
