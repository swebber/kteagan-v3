<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class California_Tortilla extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'trivalent';
        $this->data['top'] = 'california-tortilla';
        $this->data['next'] = 'terra';
        $this->data['title'] = 'California Tortilla';

		$this->load->view('california-tortilla/index', $this->data);
	}
}
