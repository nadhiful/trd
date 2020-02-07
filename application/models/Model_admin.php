<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
// ============Modul Login=======================//
	function check_user()
	{
		$username = set_value('username');
		$password = set_value('password');
		$hasil = $this->db->where('nama',$username)
						  ->where('password',$password)
						  ->limit(1)
						  ->get('user');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		} else {
			return array();
		}
	}
//============Modul Get Data All==================//
	function get_data($trigger)
	{
		if ($trigger=="vision") {
			$hasil = $this->db->select('*')
							  ->from('post')
							  ->where('id_kategori',2)
							  ->limit(1)
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}elseif($trigger=="mission"){
			$hasil = $this->db->select('*')
							  ->from('post')
							  ->where('id_kategori',3)
							  ->limit(1)
							  ->get();
			if ($hasil->num_rows() > 0 ) {
				return $hasil->result();
			}else{
				return array();
			}
		}
	}
//============Modul Get Data By ID==================//
	function getdataById($trigger)
	{
		if ($trigger == 'profile') {
			$hasil = $this->db->select('a.*,b.*')
							  ->from('post as a')
							  ->join('kategori as b','a.id_kategori = b.id_kategori','inner')
							  ->where('a.id_kategori = 1')
							  ->limit(1)
							  ->get();
			if($hasil->num_rows() > 0){
				return $hasil->result();
				}else{
					 return array();
				}
		}elseif ($trigger=="diesel_profile") {
			$hasil = $this->db->select('a.*,b.*')
							  ->from('post as a')
							  ->join('kategori as b', 'a.id_kategori = b.id_kategori','inner')
							  ->where('a.id_kategori = 4')
							  ->limit(1)
							  ->get();
			if($hasil->num_rows() > 0){
				return $hasil->result();
				}else{
					 return array();
				}
		}
	}
//====================Modul Upload Gambar ========================//
	private function _uploadImage($trigger)
	{
		if ($trigger == 'profile') {
			$name 						= 'profile_';
		}elseif ($trigger == 'diesel_a_pr') {
			$name 						= 'diesel_profile_';
		}

		$dateString 					= date('Y-m-d');
		$myDate 						= new DateTime($dateString);
		$formattedDate 					= $myDate->format('Y m d');
		$config['upload_path']          = './upload/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']			= $name.$formattedDate;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('images')) {
	        return $this->upload->data('file_name');   
	    }
	    print_r($this->upload->display_errors());
	    return "default.jpg";
	}

//============Modul Update Data ==================//

	function update_data($trigger)
	{
		if($trigger == "visi") {
			$hasil 	= 	$this->db->where('id_kategori', 2)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
		$var = $this->getdatafromUserInput("visi_u");
		$this->db->where('id', $id)
				 ->update('post',$var);
		redirect('Admin/vision');

		}elseif($trigger == "misi") {
			$hasil 	= 	$this->db->where('id_kategori', 3)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
		$var = $this->getdatafromUserInput("misi_u");
		$this->db->where('id', $id)
				 ->update('post',$var);
		redirect('Admin/mission');
		
		}elseif($trigger == "profile_a") {
			$var = $this->getdatafromUserInput("profil_a");
			$this->db->insert('post', $var);
			redirect('Admin/profile');

		}elseif($trigger == "profile_u") {
			$hasil 	= 	$this->db->where('id_kategori', 1)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
			$var = $this->getdatafromUserInput("profil_u");
			$this->db->where('id', $id)
				 	 ->update('post',$var);
			redirect('Admin/profile');
			
		}elseif ($trigger == "diesel_a") {
			$var = $this->getdatafromUserInput('diesel_a');
			$this->db->insert('post', $var);
			redirect('Admin/add_diesel');
		}elseif ($trigger == "diesel_u") {
			$hasil 	= 	$this->db->where('id_kategori', 4)
								 ->from('post')
								 ->get();
			foreach ($hasil->result() as $key) {
				$id 	= $key->id;
			}
			$var = $this->getdatafromUserInput('diesel_u');
			$this->db->where('id', $id)
				 	 ->update('post',$var);
			redirect('Admin/add_diesel');
		}

	}
//=================Modul Get Input From User ========================//
	private function getdatafromUserInput($trigger)
	{
		$var 	= $trigger ;
		$pecah 	= explode("_",$var);
		$awal 	= $pecah[0];
		$index	= $pecah[1];

		if ($awal == "profil") {
			if ($index == "a") {
				$data=array(
			            'id_kategori' 	=> 1,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('profile'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
		        );
				return $data;
				return true;

			}elseif ($index == "u") {
				if(!empty($_FILES["images"]["name"])) {
			    $data=array(
			            'id_kategori' 	=> 1,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('profile'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			    return $data;
			} else {
				$data=array(
			            'id_kategori' 	=> 1,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->input->post('old_image'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			   		return $data;
				}	
			}
		}elseif ($awal == "misi") {
			if ($index == "u") {
				$data=array(
			            'id_kategori' 	=> 3,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        	);
				return $data;
				return true;
			}
		}elseif ($awal == "visi") {
			if ($index == "u") {
				$data=array(
			            'id_kategori' 	=> 2,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        );
				return $data;
				return true;
			}
		}elseif ($awal == "diesel") {
			if ($index == "a") {
				$data=array(
			            'id_kategori' 	=> 4,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('diesel_a_pr'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			        return $data;
			        return TRUE;
			} elseif ($index == "u") {
				if(!empty($_FILES["images"]["name"])) {
			    $data=array(
			            'id_kategori' 	=> 4,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->_uploadImage('diesel_a_pr'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			    return $data;
			} else {
				$data=array(
			            'id_kategori' 	=> 4,
			            'judul'			=> $this->input->post('judul'),
			            'isi'			=> $this->input->post('isi'),
			            'status'		=> 1,
			            'images'		=> $this->input->post('old_images'),
			            'date_created'	=> date('Y-m-d'),
			            'date_updated'	=> date('Y-m-d')
	        		);
			   		return $data;
				}	
			}
		}
	}







}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */