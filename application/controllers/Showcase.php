<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Showcase extends CI_Controller
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
		$this->title = "Showcase";

		$this->css[] = "assets/css/Showcase/index.css";

		$this->js[] = "assets/js/Showcase/index.js";

		$this->data['title'] = $this->title;
		$this->data['js'] = $this->js;
		$this->data['css'] = $this->css;
		
        date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {
        $this->load->view('Showcase/Index', $this->data);
    }
}
