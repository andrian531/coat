<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front_end extends CI_Controller {

    public function __construct() {
        parent::__construct();
      //  $this->load->model('front_end_m');
    }

    public function index() {
        $data['title'] = $this->config->item('title');
        $data['halaman'] = 'Home';

        $this->tem_lib->load('template_front_end', 'front/home', $data);
    }

}
