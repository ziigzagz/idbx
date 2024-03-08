<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	private $data;
	private $title;
	private $css;
	private $js;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Comp_part');
        $this->load->model('User');
		$this->title = "About";

		$this->css[] = "assets/css/About/index.css";

		$this->js[] = "assets/js/About/index.js";

		$this->data['title'] = $this->title;
		$this->data['js'] = $this->js;
		$this->data['css'] = $this->css;
		
        date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {
        $this->load->view('About/Index', $this->data);
    }
}
