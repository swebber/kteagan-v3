<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller 
{
    public function index()
	{
        $this->data['active'] = 'about';
        $this->data['title'] = 'About';
        
		$this->load->view('about/index', $this->data);
	}
}
