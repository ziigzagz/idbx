<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Comp_part');
        $this->load->model('User');
        date_default_timezone_set("Asia/Bangkok");
        // if ($this->session->userdata('flowshoping_id') == null) {
        //     redirect('Login');
        // }
    }
    public function index()
    {
       
        $this->load->view('css');
        $this->load->view('js');
   
        $data = array(
            'd1' => 5,
            // 'd2' => $this->Comp_part->get_data(),
        );
        $this->load->view('Home',$data);
    }
    public function get_data()
    {
        $data = $this->Comp_part->get_data();
        print_r(json_encode($data));
    }
    public function insert_data()
    {
        $data = $this->Comp_part->insert_data();
        print_r(json_encode($data));
    }
}
