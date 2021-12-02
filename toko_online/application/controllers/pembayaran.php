<?php 

class Pembayaran extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('pembayaran');
	}

	function index(){
		$this->load->view('pembayaran');
	}

	function aksi(){
		$this->pembayaran->set_rules('nama','Nama','required');
		$this->pembayaran->set_rules('email','Email','required');
		$this->pembayaran->set_rules('no_telp','Email','required');
		$this->pembayaran->set_rules('jasa','Konfirmasi Email','required');
		$this->pembayaran->set_rules('bank','Email','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('pembayaran');
		}
	}
}