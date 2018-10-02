<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trivalent extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'atlantic';
        $this->data['top'] = 'trivalent';
        $this->data['next'] = 'california-tortilla';
        $this->data['title'] = 'Trivalent';

		$this->load->view('trivalent/index', $this->data);
	}
}
