<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('user/index');
	}

	public function profil()
	{
		$this->load->helper('url');
		$this->load->view('user/profil');
	}

	public function unit_dem()
	{
		$this->load->helper('url');
		$this->load->view('user/unit_dem');
	}

	public function unit_mc()
	{
		$this->load->helper('url');
		$this->load->view('user/unit_mc');
	}

	public function unit_sm()
	{
		$this->load->helper('url');
		$this->load->view('user/unit_sm');
	}

	public function galery()
	{
		$this->load->helper('url');
		$this->load->view('user/galery');
	}

	public function karir()
	{
		$this->load->helper('url');
		$this->load->view('user/karir');
	}

	public function kontak()
	{
		$this->load->helper('url');
		$this->load->view('user/kontak');
	}

	

}

?>