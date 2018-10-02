<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chewy extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'intention';
        $this->data['top'] = 'chewy';
        $this->data['next'] = 'waldens';
        $this->data['title'] = 'Chewy';

		$this->load->view('chewy/index', $this->data);
	}
}
