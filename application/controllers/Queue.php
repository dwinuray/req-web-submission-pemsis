<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Queue extends CI_Controller {
        

        function __construct() {

            parent::__construct();
            $this->load->model('M_main', 'main');
        }

        public function index(){
            
            if ( $this->input->get('v') == "add" ) {

                $this->addQueue();

            } else {


                // panggil view
                $data = array(

                    'namemodule'    => "queue",
                    'namefileview'  => "V_queue",

                    'dataQueue' => $this->main->getDataQueue()
                );
                $this->load->view( 'template/template_backend', $data );
            }
            
        }



        function addQueue() {

            $data = array(

                'namemodule'    => "queue",
                'namefileview'  => "V_queue_add"
            );
            $this->load->view( 'template/template_backend', $data );
        }



        // process add
        function processAddQueue() {

            $this->main->processAddQueue();
        }




        // change state
        function changeState( $id ) {

            if ( $id ) {

                $this->main->processUpdate( $id );
            }
        }




        function rekapanQueue() {

            $data = array(

                'namemodule'    => "queue",
                'namefileview'  => "V_rekapan_queue",

                'dataQueue' => $this->main->getDataQueue(),
                'getLayanan'=> $this->getLayanan(),

                'getDataChart'  => $this->getDataChart()
            );
            $this->load->view( 'template/template_backend', $data );
        }


        // statistic service nasabah 
        function getLayanan() {

            $totalHari = date('t');
            $dateStart = date('Y-m-'. '01');
            $dateEnd   = date('Y-m-'.$totalHari);
            
            // init
            $begin = new DateTime( $dateStart );
            $end   = new DateTime( $dateEnd );
            $nameDayOfMonth = [];


            $dataCountA = [];
            $dataCountB = [];
            $dataCountC = [];
            $dataCountD = [];
            $max = 0;
            $now = $this->main->getDataQueue('data-info', date('Y-m-d'))->num_rows();



            for( $i = $begin; $i <= $end; $i->modify('+1 day') ){
                
                $date = $i->format("Y-m-d");
                $nameDayOfMonth[] = '"'.$i->format("d F").'"';


                $dataQueue = $this->main->getDataQueue( "data-info", $date );
                $dataCountA[] = $dataQueue->num_rows();
                if ( $max == 0 ) {
                    $max = $dataQueue->num_rows();
                } else {
                    if ( $max < $dataQueue->num_rows() ) {
                        $max = $dataQueue->num_rows();
                    }
                }








                // section 2
                $getDataCalculate = $this->testData( $date );
                
                if ( $getDataCalculate['status'] ) {

                    $dataCountB[] = $getDataCalculate['value']['lamda'];
                    $dataCountC[] = $getDataCalculate['value']['miu'];
                    $dataCountD[] = $getDataCalculate['value']['utilitas'] * 100;
                } else {

                    $dataCountB[] = 0;
                    $dataCountC[] = 0;
                    $dataCountD[] = 0;
                }

                
                
            }




            








            $data = array(

                'dayofmonth'    => $nameDayOfMonth,    
                array(

                    'total'         => $this->main->getDataQueue()->num_rows(),
                    'data-stat'     => $dataCountA,
                ),

                array(

                    'total' => $this->testData(date('Y-m-d'))['value']['lamda'],
                    'data-stat' => $dataCountB
                ),
                
                array(

                    'total' => $this->testData(date('Y-m-d'))['value']['miu'],
                    'data-stat' => $dataCountC
                ),


                array(

                    'total' => $this->testData(date('Y-m-d'))['value']['utilitas'],
                    'data-stat' => $dataCountC
                ),
            );

            return $data;
        }



        // get data chart
        function getDataChart() {

            $getAllDataQueue = $this->main->getSpecificQueue(['status' => "done"]);
            $dateLabel = array();
            $dataA = [];
            $dataB = [];
            if ( $getAllDataQueue->num_rows() > 0 ) {

                $date = array();
                foreach ( $getAllDataQueue->result() AS $row ) {

                    if ( count( $date ) == 0 ) {

                        $date[] = date('Y-m-d', strtotime( $row->start_service ));
                    } else {

                        $status = true;
                        foreach ( $date AS $rowD ) {

                            if ( $rowD == date('Y-m-d', strtotime( $row->start_service )) ) {
                                
                                $status = false;
                                break;
                            } 
                        }
                        if ( $status ) $date[] = date('Y-m-d', strtotime( $row->start_service ));
                        
                    }
                }

                $dataChart = array();

                
                $dataTable = [];

                if ( count($date) > 0 ) {

                    
                    foreach ( $date AS $rowA ) {


                        $dateLabel[] = '"'.date('d F', strtotime( $rowA )).'"';

                        // $getDataAllQueueByDate = $this->main->getDataQueue("data", $rowA);
                        // // set all
                        // if ( $getDataAllQueueByDate->num_rows() > 0 ){

                        //     foreach ( $getDataAllQueueByDate->result() AS $resD ) {

                        //         $set = $this->testData( date('Y-m-d', strtotime( $resD->start_service )) );
                        //         if ( $set['status'] ) {

                        //             // $dataA[] = intval($set['value']['utilitas'] * 100);
                        //             array_push( $dataA, intval($set['value']['utilitas'] * 100) );
                        //             array_push( $dataB, intval($set['value']['probabilitasMenganggur'] * 100) );


                        //             echo intval($set['value']['utilitas'] * 100).'<br>';
                                    
                        //             // $dataB[] = intval($set['value']['probabilitasMenganggur'] * 100);

                        //         } else {

                        //             $dataA[] = 0;
                        //             $dataB[] = 0;
                        //         }
                        //     }
                        // }



                        $set = $this->testData( $rowA );
                        if ( $set['status'] ) {

                            // $dataA[] = intval($set['value']['utilitas'] * 100);
                            array_push( $dataA, intval($set['value']['utilitas'] * 100) );
                            array_push( $dataB, intval($set['value']['probabilitasMenganggur'] * 100) );


                            // echo intval($set['value']['utilitas'] * 100).'<br>';
                                    
                            // $dataB[] = intval($set['value']['probabilitasMenganggur'] * 100);

                        } else {

                                $dataA[] = 0;
                                $dataB[] = 0;
                        }



                        $set = $this->testData( $rowA );
                        array_push( $dataTable, array(

                            'date'  => $rowA,
                            'lamda' => round($set['value']['lamda'], 2),
                            'miu'   => round($set['value']['miu'], 2),
                            'lamaPelayanan' => $set['value']['lamaPelayanan'],
                            'utilitas'      => $set['value']['utilitas'],
                            'probabilitasMenganggur'    => $set['value']['probabilitasMenganggur'],
                            'rataRataJumlahPelangganDalamAntrian'   => $set['value']['rataRataJumlahPelangganDalamAntrian'],
                            'rataRataJumlahPelangganDalamSistem'    => $set['value']['rataRataJumlahPelangganDalamSistem'],
                            'waktuMenungguAntrian'  => $set['value']['waktuMenungguAntrian'],
                            'waktuMenungguSistem'   => $set['value']['waktuMenungguSistem']
                        ) );
                    }
                }
                

            }

            // print_r( $dataA );
            // print_r( $dataA );
            return [

                'label' => $dateLabel,
                'dataA' => $dataA,
                'dataB' => $dataB,

                'dataTable' => $dataTable
            ];
        }

        // calculate
        function testData( $tgl ) {

            // date
            $dateStart = $tgl.' 07:00:00';
            
            if ( $tgl == date('Y-m-d') ) {

                if ( date('H') > 15 ) {

                    $dateEnd   = $tgl.' 15:00:00'; // history
                } else $dateEnd = $tgl.' '.date('H:i:s'); // now
                
            } else $dateEnd   = $tgl.' 15:00:00'; // history
            
            
            // convert to object date
            $strA = date_create( $dateStart );
            $strB = date_create();

            $totalKerja = date_diff( $strB, $strA );
            
            // data Queue
            $dataQueue = $this->main->getDataQueue( "date-now", $tgl );
            $status = false;
            
            $lamda = 0;
            $lamaPelayanan = 0;
            $miU = 0;
            $utilitas = 0;
            $probabilitasMenganggur = 0;
            $rataRataJumlahPelangganDalamAntrian = 0;
            $rataRataJumlahPelangganDalamSistem  = 0;
            $waktuMenungguAntrian = 0;
            $waktuMenungguSistem  = 0;

            if ( $dataQueue->num_rows() > 0) {


                $status = true;
                // Waktu antar kedatangan atau mencari lambda
                $waktu = ($totalKerja->format('%h') * 60 * 60) + ($totalKerja->format('%i') * 60) + ($totalKerja->format('%s')) ; // detik
                $totalPelanggan = $waktu / $dataQueue->num_rows(); // detik per-orang
                $lamda = (3600 / $totalPelanggan); // lamda (orang per-jam)

                // echo 3600/$totalPelanggan;

                // Waktu Pelayanan
                $lamaPelayanan = 0;
                foreach ( $dataQueue->result() AS $row ) {

                    if ( $row->status == "done" ) {

                        $startServ = date_create( $row->start_service );
                        $endServ = date_create( $row->end_service );
                        $totalWaktu = date_diff( $endServ, $startServ );

                        $lamaPelayanan += ($totalWaktu->format('%h') * 60) + ($totalWaktu->format('%i'));
                        // echo "check waktu ". $totalWaktu->format('%h').' = ';
                        // echo "selisih ". $lamaPelayanan.'<hr>';
                        // // echo $totalJamMiu->format('%h %i %s').'<hr>';
                    }
                }



                // Waktu pelayanan | miu
                $totalPelayanan = $lamaPelayanan * 60; // detik
                $banyakPelanggan= $dataQueue->num_rows();
                $resultPelayanan= $totalPelayanan / $banyakPelanggan; // detik per orang
                $miU = intval( 3600 / $resultPelayanan ); // miu (orang per-jam)


                


                // utilitas ρ = λ/sμ
                $utilitas = $lamda / (2 * $miU); // persen
                // Oleh karenanya diketahui bahwa dengan petugas sebanyak 3 orang didapatkan utilitas sistemnya sebesar x. Hal itu berarti bahwa rata-rata petugas sibuk waktunya.
                
                

                // Probabilitas Menganggur (Po)
                $lamdamiU = $lamda / $miU;
                $probabilitasMenganggur = 1 / ((1 / $this->faktorial(0)) + ($lamdamiU / $this->faktorial(1)) + ( ($lamdamiU * $lamdamiU) / $this->faktorial(2)) + 
                              ( ($lamdamiU * $lamdamiU) / $this->faktorial(2) * (1 - $utilitas) )); // persen

                // Dari hasil perhitungan diatas didapatkan bahwa probabilitas petugas Teller menganggur adalah $hitunganPo %
                

                
                
                // Rata-rata jumlah pelanggan dalam antrian (Lq):
                $rataRataJumlahPelangganDalamAntrian = ($probabilitasMenganggur * ( $lamdamiU * $lamdamiU ) * $utilitas) / 
                                           ($this->faktorial(2) * ((1 - $utilitas) * (1 - $utilitas)) ); // orang

                // Jadi panjang rata-rata pelanggan yang mengantri untuk melakukan transaksi di teller sebanyak $rataRataJumlahPelanggan.






                // Rata-rata jumlah pelanggan dalam sistem (L):
                $rataRataJumlahPelangganDalamSistem = $rataRataJumlahPelangganDalamAntrian + $lamdamiU; // orang
                // Berdasarkan perhitungan diatas maka jumlah rata-rata pelanggan dalam sistem pada transaksi adalah sebanyak $x orang.




                // Rata-rata waktu menunggu di dalam antrian (Wq) dan System (W):
                // Waktu menunggu rata-rata dalam antrian (Wq):
                $waktuMenungguAntrian = $rataRataJumlahPelangganDalamAntrian / $lamda; // menit
                
                // echo $waktuMenungguAntrian;
                // Dimana waktu tunggu rata-rata semua pelanggan yang akan melakukan transaksi diteller selama $x menit.



                // Waktu menunggu rata-rata dalam system (W):
                $waktuMenungguSistem = $waktuMenungguAntrian + ( 1 / $miU ); // jam
                // echo $waktuMenungguSistem;

                // Dimana waktu tunggu rata-rata semua nasabah dalam sistem yakni waktu rata-rata yang 
                // dibutuhkan nasabah mulai dari masuk antrian sampai selesai dilayani oleh petugas adalah $waktuMenungguSistem.

                


                // $totalWaktuPemantauan = 


                // // Tingkat pelayanan per jamnya (miu)
                // $jumlahPelanggan = $dataQueue->num_rows();
                // $miU = $jumlahPelanggan / $totalKerja; // jml orang x per-jam

                // echo $miU;
            }

            
            return [

                'status'    => $status,
                'value'     => array(

                    'lamda' => $lamda,
                    'miu'   => $miU,
                    'lamaPelayanan' => $lamaPelayanan,
                    'utilitas'      => $utilitas,
                    'probabilitasMenganggur'    => $probabilitasMenganggur,
                    'rataRataJumlahPelangganDalamAntrian'   => $rataRataJumlahPelangganDalamAntrian,
                    'rataRataJumlahPelangganDalamSistem'    => $rataRataJumlahPelangganDalamSistem,
                    'waktuMenungguAntrian'  => $waktuMenungguAntrian,
                    'waktuMenungguSistem'   => $waktuMenungguSistem
                )
            ];
            
        }   



        function faktorial( $x ) {

            $res = 0;
            if ( $x == 0 ) {

                $res = 1;
            } else {

                for ( $i = 1; $i <= $x; $i++ ) {

                    if ( $res == 0 ) {

                        $res = 1;
                    } else {

                        $res *= $i;
                    }
                }
            }
            return $res;
        }


        
    
    }
    
    /* End of file Queue.php */
    