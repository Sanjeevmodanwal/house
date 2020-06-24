<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function upload(){
	// 	$config['upload_path']          = './images/';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size'] = 2000;
    //   //  $config['max_width'] = 1500;
    //   //  $config['max_height'] = 1500;

	// 	$this->load->library('upload', $config);

	// 	if ( ! $this->upload->do_upload('userfile'))
	// 	{
	// 			$error = array('error' => $this->upload->display_errors());

	// 			$this->load->view('welcome_message', $error);
	// 	}
	// 	else
	// 	{
	// 			$data = array('upload_data' => $this->upload->data());

	// 			$this->load->view('welcome_message', $data);
	// 	}
	}

	public function admin(){
		$this->load->view('admin/login.php');
	}
        
        public function plan(){
            $this->load->view('plan');
        }
        
        public function contact(){
            $this->load->view('contact');
        }
}
