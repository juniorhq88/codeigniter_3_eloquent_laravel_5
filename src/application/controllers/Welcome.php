<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            parent::__construct();
            
            $this->load->model('Person');
            $this->load->model('Telephone');
            $this->load->model('Telephone_type');
        }
    
	public function index()
	{
//		$this->load->view('welcome_message');
            
            $persons = Person::all();
            foreach ( $persons as $person ) {
                echo "Name: " . $person->name . '<br><br>';
                $telephones = $person->telephone;
                foreach ( $telephones as $telephone ) {
                    echo $telephone->telephone_type->type . ': ' . 
                            $telephone->telephone . '<br>';
                }
                echo '<hr>';
            }    
        }
}
