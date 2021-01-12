<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Employee extends CI_Controller {
    
        public function index(){

            $data = array(

                'namemodule'    => "employee",
                'namefileview'  => "V_employee_add"
            );
            $this->load->view('template/template_backend', $data);
        }
    
    }
    
    /* End of file Employee.php */
    