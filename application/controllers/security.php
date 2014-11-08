<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends CI_Controller {

        function  __construct() {
            parent::__construct();
            $this->load->helper('url');

            $this->output->set_template('login');
        }

	public function index()
	{
            $this->load->view('security/index');
	}
}
?>
