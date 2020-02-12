<?php

/**
 * 
 */
class Model_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function Mindex() {
		$query = $this->db->query('select * from post where id_kategori=7');
		return $query->result_array();
	}

	public function Mprofil()
	{
		$query = $this->db->query('select * from post where id_kategori=1');
		return $query->row();
	}

	public function Mvisi(){
		$query = $this->db->query('select * from post where id_kategori=2');
		return $query->row();
	}

	public function Mmisi(){
		$query = $this->db->query('select * from post where id_kategori=3');
		return $query->row();
	}

	public function Mdem() {
		$query = $this->db->query('select * from post where id_kategori=4');
		return $query->row();
	}

	public function Mdemproduct() {
		$query = $this->db->query('select * from product where id_kategori=1');
		return $query->result_array();
	}

	public function Msm() {
		$query = $this->db->query('select * from post where id_kategori=5');
		return $query->row();
	}

	public function Msmproduct(){
		$query = $this->db->query('select * from product where id_kategori=2');
		return $query->result_array();
	}

	public function Mmc(){
		$query = $this->db->query('select * from post where id_kategori=6');
		return $query->row();
	}

	public function Mmcproduct() {
		$query = $this->db->query('select * from product where id_kategori=3');
		return $query->result_array();
	}

	public function Mclient() {
		$query = $this->db->query('select * from post where id_kategori=7');
		return $query->result_array();
	}

	public function Mevent() {
		$query = $this->db->query('select * from event');
		return $query->result_array();
	}

	public function Mkarir() {
		$query = $this->db->query('select * from karir where kategori=2');
		return $query->result_array();
	}

	public function Mmagang() {
		$query = $this->db->query('select * from karir where kategori=1');
		return $query->result_array();
	}

	public function Mkontak($key){
		$sql="insert into messages (name, email, subject, message) values(?,?,?,?);";
		$this->db->query($sql, array($key['name'], $key['email'], $key['subject'], $key['message']));
		return $this->db->affected_rows();
	}

	// public function insert($data) {
	// 	$this->db->insert('messages', $data);
	// }
}
?>