<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intention extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'terra';
        $this->data['top'] = 'intention';
        $this->data['next'] = 'chewy';
        $this->data['title'] = 'Intention';

		$this->load->view('intention/index', $this->data);
	}
}
