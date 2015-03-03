<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {
    
     function __construct() {
     parent::__construct();  
      
       $this->load->helper('url');
       $this->lang->load('form_validation');
    }

	public function index()
	{
		$this->load->view('template/header');
                $this->load->view('template/slider');
                $this->load->view('template/works');
                $this->load->view('template/our_works');
                $this->load->view('template/footer');
	}
        
        public function aboutus()
        {
            $this->load->view('template/header');
                $this->load->view('template/aboutus');
                
                $this->load->view('template/footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */