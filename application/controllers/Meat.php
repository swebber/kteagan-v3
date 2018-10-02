<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meat extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'waldens';
        $this->data['top'] = 'meat';
        $this->data['next'] = 'typographic';
        $this->data['title'] = 'Meat';

		$this->load->view('meat/index', $this->data);
	}
}
