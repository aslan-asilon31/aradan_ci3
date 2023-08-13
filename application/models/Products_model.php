<?php 
class Products_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getProducts() {
        $query = $this->db->get('products');
        return $query->result();
    }
}