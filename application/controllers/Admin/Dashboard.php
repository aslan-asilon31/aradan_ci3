<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Products_model');
    }
    
    public function index()
	{
		$data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('Admin/Dashboard', '', TRUE);

        $this->load->view('layouts/backend_layout', $data);
	}


}
