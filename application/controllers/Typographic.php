<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typographic extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'meat';
        $this->data['top'] = 'typographic';
        $this->data['next'] = 'atlantic';
        $this->data['title'] = 'Typographic';

		$this->load->view('typographic/index', $this->data);
	}
}
