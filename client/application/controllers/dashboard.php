<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://localhost/apotekasek1/api/Obat');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        $data['obat'] = json_decode($result, TRUE);
        curl_close($curl);

		$this->load->view('templates/header');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}

	
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */ ?>