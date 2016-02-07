<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    
    
    public function index()
    {
        $this->load->view('welcome_message');
    }
    
    
    /*Direct user to home page*/
    function home()
    {
        $this->load->view('homeview');
    }
    
    
    
    /*This function is the json api, it gets the deals data from the model*/
    function json_api()
    {
        
        $this->load->model('model');
        $deals = $this->model->get_deals();
        echo $deals;
        
        
    }
    
    
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */