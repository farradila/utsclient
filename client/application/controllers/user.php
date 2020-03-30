<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{ 
		$data['user']= $this->model_user->get_data('User')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
    }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */ ?>