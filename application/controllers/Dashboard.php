<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {
        
        public function index(){
            
            // panggil view
            $data = array(

                'namemodule'    => "dashboard",
                'namefileview'  => "V_dashboard"
            );
            $this->load->view( 'template/template_backend', $data );
        }
    
    }
    
    /* End of file Dashboard.php */
    