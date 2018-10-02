<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elsewhere extends MY_Controller 
{
    public function index()
	{
        $this->data['active'] = 'elsewhere';
        $this->data['title'] = 'Elsewhere';
        
		$this->load->view('elsewhere/index', $this->data);
	}
}
