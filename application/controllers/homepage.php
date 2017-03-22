<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Homepage extends CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function index(){

		$data['page'] = "home";
		$this->load->view('vindex',$data);
	}

	public function about(){
		$data['page'] = "about";
		$this->load->view('vabout',$data);
	}

	public function services(){
		$data['page'] = "services";
		$this->load->view('vservices',$data);
	}

	public function products(){
		$data['page'] = "products";
		$this->load->view('vproducts',$data);
	}

	public function team1(){
		$data['page'] = "team1";
		$this->load->view('vteam1',$data);
	}

	public function team2(){
		$data['page'] = "team2";
		$this->load->view('vteam2',$data);
	}

	public function team3(){
		$data['page'] = "team3";
		$this->load->view('vteam3',$data);
	}

	public function news(){
		$data['page'] = "news";
		$this->load->view('vnews',$data);
	}

	public function newsFull(){
		$data['page'] = "newsFull";
		$this->load->view('vnewsFull',$data);
	}

	public function clients(){
		$data['page'] = "clients";
		$this->load->view('vclients',$data);
	}

	public function contact(){
		$data['page'] = "contact";
		$this->load->view('vcontact',$data);
	}

	public function comingsoon(){
		$this->load->view('vcomingsoon');
	}

	public function notf(){
		$data['page'] = "404";
		$this->load->view('v404',$data);
	}


}
