<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $data;
	private $title;
	private $js;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Comp_part');
        $this->load->model('User');
		$this->title = "Home";

		$this->js[] = "assets/js/Home/index.js";

		$this->data['title'] = $this->title;
		$this->data['js'] = $this->js;
		

        date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {

        $this->load->view('Home/Index', $this->data);
    }
}
