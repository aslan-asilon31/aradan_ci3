<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Products_model');
    }

    public function index() {
        $data['products'] = $this->Products_model->getProducts();

        $data['content'] = $this->load->view('Product/index', $data, TRUE); // Mengirim data ke view

        $this->load->view('layouts/backend_layout', $data);
    }

    public function upload() {
        $data['products'] = $this->Products_model->getProducts();

        $data['content'] = $this->load->view('Product/upload', $data, TRUE); // Mengirim data ke view

        $this->load->view('layouts/backend_layout', $data);
    }
}
