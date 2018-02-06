<?php 


/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
    	parent::__construct();
		$this->load->helper('url');
		$this->load->library('viewer');
	}

	public function index($value='')
	{
		$data['default_title'] ='Coloftech' ;

		$this->viewer->load('default','sample',$data);
	}

	public function infolder($value='')
	{

		$data['default_title'] ='Coloftech' ;

		$this->viewer->load('default','infolder/index',$data);
	}


}