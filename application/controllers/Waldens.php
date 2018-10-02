<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waldens extends MY_Controller 
{
    public function index()
	{
        $this->data['prev'] = 'chewy';
        $this->data['top'] = 'waldens';
        $this->data['next'] = 'meat';
        $this->data['title'] = "Walden's";

		$this->load->view('waldens/index', $this->data);
	}
}
