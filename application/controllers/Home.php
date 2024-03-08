<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $data;
	private $title;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Comp_part');
        $this->load->model('User');
		$this->title = "Home";
		$this->data = array(
			'title' => $this->title
		);
        date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {
        $this->load->view('css');
        $this->load->view('js');
        $this->load->view('Home/Index', $this->data);
    }
}
