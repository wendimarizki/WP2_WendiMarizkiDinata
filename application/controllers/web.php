<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class web extends CI_Controller{

    function _construct(){
        parent::_construct();
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index' ,$data);
        $this->load->view('v_footer',$data);
    }
}