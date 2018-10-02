<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlantic extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'typographic';
        $this->data['top'] = 'atlantic';
        $this->data['next'] = 'trivalent';
        $this->data['title'] = 'Atlantic Magazine';

		$this->load->view('atlantic/index', $this->data);
	}
}
