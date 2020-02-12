<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();	

		$this->load->database();
		$this->load->model('Model_user');
        $this->load->helper('url');
	}
	
	public function index()
	{
		$data['index'] = $this->Model_user->Mindex();
		$this->load->view('user/index', $data);
	}

	public function profil()
	{
		$data['profil'] = $this->Model_user->Mprofil();
		$this->load->view('user/profil', $data);
	}

	public function visimisi() {
		$data['visi'] = $this->Model_user->Mvisi();
		$data['misi'] = $this->Model_user->Mmisi();
		$this->load->view('user/visimisi', $data);
	}

	public function corevalue() {
		$this->load->view('user/corevalue');
	}

	public function client() {
		$data['client'] = $this->Model_user->Mclient();
		$this->load->view('user/client', $data);
	}

	public function unit_dem()
	{
		$data['dem'] = $this->Model_user->Mdem();
		$data['pdem'] = $this->Model_user->Mdemproduct();
		$this->load->view('user/unit_dem', $data);
	}

	public function unit_mc()
	{
		$data['mc'] = $this->Model_user->Mmc();
		$data['pmc'] = $this->Model_user->Mmcproduct();
		$this->load->view('user/unit_mc', $data);
	}

	public function unit_sm()
	{
		$data['sm'] = $this->Model_user->Msm();
		$data['psm'] = $this->Model_user->Msmproduct();
		$this->load->view('user/unit_sm', $data);
	}

	public function galery()
	{
		$data['event'] = $this->Model_user->Mevent();
		$this->load->view('user/galery', $data);
	}

	public function karir()
	{
		$data['karir'] = $this->Model_user->Mkarir();
		$data['magang'] = $this->Model_user->Mmagang();
		$this->load->view('user/karir', $data);
	}

	public function sukses(){
		$this->load->view('user/sukses');
	}

	public function kontak(){
		$this->load->view('user/kontak');
	}

	public function add() {
		$this->form_validation->set_rules('input_name', 'name', 'trim|required');
		$this->form_validation->set_rules('input_email', 'email', 'trim|required');
		$this->form_validation->set_rules('input_subject', 'subject', 'trim|required');
		$this->form_validation->set_rules('input_message', 'message', 'trim|required');

		if ($this->form_validation->run()==FALSE) {
			// $data['kontak'] = $this->Model_user->Mkontak();
			$this->load->view('user/kontak');
		} else {
			$send['name'] = $this->input->post('input_name');
			$send['email'] = $this->input->post('input_email');
			$send['subject'] = $this->input->post('input_subject');
			$send['message'] = $this->input->post('input_message');

			$insert['add'] = $this->Model_user->Mkontak($send);
			$this->load->view('user/sukses', $insert);

			$this->session->set_flashdata('msg', 'Data ditambahkan');
			redirect('Home/sukses');
		}
	}

}

?>