<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
		$this->load->helper('url');
        $this->load->library('grocery_CRUD');
	}

	public function index()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('categoria');
            $output = $crud->render();
            $this->load->view('example.php',$output);
	}

}

	