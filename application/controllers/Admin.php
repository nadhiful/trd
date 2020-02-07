<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_admin');
	}

	public function index()
	{
		
	}

//=====================Panel Untuk Routing Login===============================================//
	function login()
	{
		$data = array(
						'title'		=> 'Halaman Login',
					 );
		$this->load->view('backend/login/login',$data);
	}

	function check_user()
	{
			$this->form_validation->set_rules(
				'username', 'Username', 'trim|required'
			);
			$this->form_validation->set_rules(
				'password', 'Password', 
				'trim|required|min_length[2]|max_length[8]'
				);
		if($this->form_validation->run() == FALSE) {
			$this->load->view('backend/login/login');
			} else {
				$valid = $this->Model_admin->check_user();
				if ($valid == FALSE)
				{
					$this->session->set_flashdata('notif','Password atau Username Salah');
				redirect('Admin/login');
				} else {
					$array = array(
						'id'			=> $valid->id,
						'id_role' 		=> $valid->namaUser,
						'nama'	   		=> $valid->levelUser,
					);
					//echo "string";
					$this->session->set_userdata($array);
					redirect('Admin/dashboard');
				}
			}

	}
	function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('id_role');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('login_status');
        $this->session->sess_destroy();
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('Admin/login');
    }
 //=====================Panel Untuk Routing Login===============================================//

//=====================Panel Untuk Routing Profil===============================================//
    function dashboard()
    {
    	$data = array(
    					'title' 	=> 'Dashboard Page',
    					'isi' 		=> 'backend/dashboard/dashboard',
    					'label'		=> 'Dashboard'

    				);
    	$this->load->view('layout/backend/wrapper', $data);
    }

   function vision()
   {
   		$data = array(
    					'title' 	=> 'Company Vision Page',
    					'isi' 		=> 'backend/dashboard/vision',
    					'label'		=> 'Profile',
    					'data'		=> $this->Model_admin->get_data('vision')
    				);
    	$this->load->view('layout/backend/wrapper', $data);
   }

   function mission()
   {
   		$data = array(
    					'title' 	=> 'Mission Company Page',
    					'isi' 		=> 'backend/dashboard/mission',
    					'label'		=> 'Profile',
    					'data'		=> $this->Model_admin->get_data('mission')
    				);
    	$this->load->view('layout/backend/wrapper', $data);
   }

    function profile()
    {
        $data = array(
                        'title'     => 'Profile Page',
                        'isi'       => 'backend/dashboard/edit_profile',
                        'label'     => 'Profile',
                        'data'      => $this->Model_admin->getdataById('profile')

                    );
        $this->load->view('layout/backend/wrapper', $data);
    }

   function add_profile()
    {
        $data = array(
                        'title'     => 'Profile Page',
                        'isi'       => 'backend/dashboard/profile',
                        'label'     => 'Profile'
                    );
        $this->load->view('layout/backend/wrapper', $data);
    }
//=====================Panel Untuk Routing Unit===============================================//
  function diesel()
   {
        $data = array(
                        'title'     => 'Diesel Manufacture Page',
                        'isi'       => 'backend/dashboard/diesel',
                        'label'     => 'Diesel Manufacture',
                        
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }
    
    function add_diesel()
   {
        $data = array(
                        'title'     => 'Diesel Manufacture Page',
                        'isi'       => 'backend/dashboard/add_diesel',
                        'label'     => 'Diesel Manufacture',
                        'data'      => $this->Model_admin->getdataById('diesel_profile')
                        
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }
     function marine()
   {
        $data = array(
                        'title'     => 'Sentosa Marine Page',
                        'isi'       => 'backend/dashboard/marine',
                        'label'     => 'Sentosa Marine',
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }
     function machine()
   {
        $data = array(
                        'title'     => 'Machining Centre Page',
                        'isi'       => 'backend/dashboard/machine',
                        'label'     => 'Machining Centre',
                    );
        $this->load->view('layout/backend/wrapper', $data);
   }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */