<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
 
        $this->load->database();
 
 		//$this->pdo = $this->load->database('pdo', true);

		// var_dump your db object for a moment...
		//var_dump($this->pdo);
		
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        echo "coucou test";
        die();
    }
    
    public function numeros()
    {
    	echo "test num";
    	
    	$this->grocery_crud->set_theme('datatables');
        $this->grocery_crud->set_table('magp3-numero');
        $this->grocery_crud->add_action('Editer', '', 'main/editer','ui-icon-plus');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output); 
        
    }
    
    function _example_output($output = null) 
    {
        $this->load->view('our_template.php',$output);    
    }
    
    function editer() 
    {
    
    
        echo "editer";  
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */