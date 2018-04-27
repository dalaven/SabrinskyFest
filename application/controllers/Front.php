<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    
    function __construct() {
        parent::__construct();
        $this->load->library(array('session','form_validation','upload','email'));
		$this->load->helper(array('url','form'));
    }
    
	public function index()
	{
		$this->load->view('header');
		$this->load->view('first_page');
	}
    
    public function principal()
    {
      $this->load->view('header');
      $this->load->view('principal');  
    }
    
    
    
}
