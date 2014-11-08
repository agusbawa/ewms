<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

        function  __construct() {
            parent::__construct();
            $this->load->helper('url');

            $this->output->set_template('main');
        }

	public function index()
	{
            $this->load->view('home/index');
	}
}
?>
