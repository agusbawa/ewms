<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menulist extends CI_Controller {

        function  __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Menulist_model');

            $this->output->set_template('main');
        }

	public function index()
	{
            //$this->load->view('home/index');
	}

        public function register(){
            $data['menu'] = $this->Menulist_model->getList();
            $this->load->view('menulist/register',$data);
        }
}
?>

