<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terra extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'california-tortilla';
        $this->data['top'] = 'terra';
        $this->data['next'] = 'intention';
        $this->data['title'] = 'Terra';

		$this->load->view('terra/index', $this->data);
	}
}
