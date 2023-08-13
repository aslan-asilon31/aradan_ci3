<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index()
	{
		// $data['title'] = 'Admin Dashboard';
        $data['content'] = $this->load->view('Auth/Login', '', TRUE);

        $this->load->view('layouts/auth_layout', $data);
	}
}
