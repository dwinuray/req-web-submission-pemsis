<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_main extends CI_Model {
    
        
        function getDataQueue( $key = null, $date = null ) {

            if ( $key ) {

                $sql = "SELECT * FROM `transaction` WHERE status = 'done' AND start_service LIKE '$date%'";
                return $this->db->query($sql);

            } else return $this->db->get('transaction');
            
        }




        function getSpecificQueue( $key ) {

            return $this->db->get_where('transaction', $key);
        }

        function processAddQueue() {

            $data = array(

                'kode_transaction' => $this->input->post('kode'),
                'name'      => $this->input->post('name'),
                'type'      => $this->input->post('operational'),
                'start_service' => date('Y-m-d H:i:s'),
                'end_service'   => '',
                'status'        => "waiting",
                'id_employee'   => 1,
            );

            $this->db->insert('transaction', $data);

            $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Operasi berhasil !</strong> Antrian '.$data['kode_transaction'].' berhasil ditambahkan pada '.date('d M Y H.i A').'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                        </button>
                    </div>';
            $this->session->set_flashdata('msg', $msg);
            redirect('queue');
        }




        function processUpdate( $id ) {

            $this->db->where('id_transaction', $id)->update('transaction', ['status' => "done", 'end_service' => date('Y-m-d H:i:s')]);
            $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Operasi berhasil !</strong> Antrian berhasil dilayani pada '.date('d M Y H.i A').'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                        </button>
                    </div>';
            $this->session->set_flashdata('msg', $msg);
            redirect('queue');
        }
    }
    
    /* End of file M_main.php */
    