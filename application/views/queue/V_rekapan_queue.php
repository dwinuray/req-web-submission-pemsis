<!-- Content -->
<div class="content container-fluid">
        
    <!-- Page Header -->
    <div class="page-header">
    <div class="row align-items-center">
        <div class="col-sm mb-2 mb-sm-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rekapan</li>
            </ol>
        </nav>

        <h1 class="page-header-title">Rekapan Terkini</h1>
        </div>

    
    </div>
    </div>
    <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Total Layanan Nasabah</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2"><?php echo $dataQueue->num_rows() ?></span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <?php //echo print_r( $getLayanan[0] ) ?>
                    <div class="chartjs-custom" style="height: 3rem;">
                      
                    
                      
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": [<?php echo implode(',', $getLayanan['dayofmonth']) ?>],
                                   "datasets": [{
                                    "data": [<?php echo implode(',', $getLayanan[0]['data-stat']) ?>],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": " orang",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> Layanan Nasabah
                </span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Antar Kedatangan / Jam</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2"><?php echo intval($getLayanan[1]['total']) ?> Orang</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": { 
                                    "labels": [<?php echo implode(',', $getLayanan['dayofmonth']) ?>],
                                   "datasets": [{
                                    "data": [<?php echo implode(',', $getLayanan[1]['data-stat']) ?>],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": " orang / jam",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> <?php echo intval($getLayanan[1]['total']) ?> Orang / Jam
                </span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Waktu Pelayanan / Jam</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2"><?php echo $getLayanan[2]['total'] ?> Orang</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": { 
                                    "labels": [<?php echo implode(',', $getLayanan['dayofmonth']) ?>],
                                   "datasets": [{
                                    "data": [<?php echo implode(',', $getLayanan[2]['data-stat']) ?>],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": " orang / jam",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                
                <span class="badge badge-soft-success">
                    <i class="tio-trending-up"></i> <?php echo $getLayanan[2]['total'] ?> Orang / Jam
                </span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Utilitas Sistem</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2"><?php echo round($getLayanan[3]['total'], 2) * 100 ?> %</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": { 
                                    "labels": [<?php echo implode(',', $getLayanan['dayofmonth']) ?>],
                                   "datasets": [{
                                    "data": [<?php echo implode(',', $getLayanan[3]['data-stat']) ?>],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="text-body font-size-sm ml-1">Periode <?php echo date('d F Y') ?></span>
                <span class="badge badge-soft-secondary"><?php echo round($getLayanan[3]['total'], 2) * 100 ?>%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Stats -->

        <div class="row gx-2 gx-lg-3">
          <div class="col-lg-5 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Pekerja yang ada di BANK ITN Malang</h5>

              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <p>Menampilkan secara keseluruhan data operator bank BNI ITN Malang. Nasabah yang sering dilayani adalah mahasiswa aktif ITN.</p>

                <ul class="list-group list-group-flush list-group-no-gutters">
                  <li class="list-group-item py-3">
                    <h5 class="modal-title">Pengguna:</h5>
                  </li>

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-sm avatar-circle mr-2" src="assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Dwi Nur Cahyo <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></h5>
                            <span class="d-block font-size-sm">Programmer, Analyst, and Lead Development</span>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->
                  
                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-sm avatar-circle mr-2" src="assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Juan Alvis <span class="badge badge-danger badge-pill text-uppercase ml-1">Assistance</span></h5>
                            <span class="d-block font-size-sm">Critical Thinking and Quality Assurance </span>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->
                  
                  
                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-sm avatar-circle mr-2" src="assets/img/160x160/img8.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Ananda Bella Oktaviani</h5>
                            <span class="d-block font-size-sm">Worker at Bank ITN as operator "Teller 2" </span>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->



                  <li class="list-group-item"><small>Or you can <a href="#">sync data to Front Dashboard</a> to ensure your data is always up-to-date.</small></li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-7 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Data Statistik Rekapan Antrian</h5>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-sm mb-2 mb-sm-0">
                    
                  </div>

                  <div class="col-sm-auto align-self-sm-end">
                    <!-- Legend Indicators -->
                    <div class="row font-size-sm">
                      <div class="col-auto">
                        <span class="legend-indicator bg-primary"></span> Utilitas Sistem
                      </div>
                      <div class="col-auto">
                        <span class="legend-indicator"></span> Probabilitas Menganggur
                      </div>
                    </div>
                    <!-- End Legend Indicators -->
                  </div>
                </div>
                <!-- End Row -->
                <!-- Bar Chart -->  
                <div class="chartjs-custom">
                  <canvas id="updatingData" style="height: 20rem;"
                          data-hs-chartjs-options='{
                            "type": "bar",
                            "data": {
                              "labels": [<?php echo implode(',', $getDataChart['label']) ?>],
                              "datasets": [
                              {
                                "data": [<?php echo implode(',', $getDataChart['dataA']) ?>],
                                "backgroundColor": "#377dff",
                                "hoverBackgroundColor": "#377dff",
                                "borderColor": "#377dff"
                              },
                              {
                                "data": [<?php echo implode(',', $getDataChart['dataB']) ?>],
                                "backgroundColor": "#e7eaf3",
                                "borderColor": "#e7eaf3"
                              }
                              ]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 100,
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 10,
                                    "postfix": "%"
                                  }
                                }],
                                "xAxes": [{
                                  "gridLines": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 5
                                  },
                                  "categoryPercentage": 0.5,
                                  "maxBarThickness": "10"
                                }]
                              },
                              "cornerRadius": 2,
                              "tooltips": {
                                "postfix": " %",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'></canvas>
                </div>
                <!-- End Bar Chart -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-12 col-md">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="card-header-title">Rekapan Keseluruhan</h5>

              
                </div>
              </div>

              <div class="col-auto">
                <!-- Filter -->
                <div class="row align-items-sm-center">
                  
                    

                  <div class="col-md">
                    <form>
                      <!-- Search -->
                      <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tio-search"></i>
                          </div>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Cari" aria-label="Search users">
                      </div>
                      <!-- End Search -->
                    </form>
                  </div>
                </div>
                <!-- End Filter -->
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                   data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th>Date</th>
                  <th>Lq</th>
                  <th>L</th>
                  <th>Wq</th>
                  <th>W</th>
                </tr>
              </thead>

              <tbody>
                
                <?php if ( count( $getDataChart['dataTable']) > 0  ) { 
                    
                    
                    foreach ( $getDataChart['dataTable'] AS $res ) {    
                ?>
                <tr>
                  <td><?php echo date('d F Y', strtotime($res['date'])) ?> <br> <small>Periode waktu</small></td>
                  <td><?php echo number_format($res['rataRataJumlahPelangganDalamAntrian'], 3).' orang' ?> <br><small>Rata-rata jumlah pelanggan dalam antrian (Lq):</small></td>
                  <td><?php echo number_format($res['rataRataJumlahPelangganDalamSistem'], 3).' orang' ?> <br> <small>Rata-rata jumlah pelanggan dalam sistem (L):</small></td>
                  <td><?php echo number_format($res['waktuMenungguAntrian'], 3).' menit' ?> <br> <small>Waktu menunggu rata-rata dalam antrian (Wq):</small></td>
                  <td><?php echo number_format($res['waktuMenungguSistem'] * 60, 2).' menit' ?> <br> <small>Waktu menunggu rata-rata dalam system (W):</small></td>
                </tr>
                <?php } } ?>
              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->

      </div>
      <!-- End Content -->


    
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/chart.js.extensions/chartjs-extensions.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
    


    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        Chart.plugins.unregister(ChartDataLabels);

        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

        // CALL WHEN TAB IS CLICKED
        // =======================================================
        $('[data-toggle="chart-bar"]').click(function(e) {
          let keyDataset = $(e.currentTarget).attr('data-datasets')

         if (keyDataset === 'lastWeek') {
           updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
           updatingChart.data.datasets = [
             {
               "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
               "backgroundColor": "#377dff",
               "hoverBackgroundColor": "#377dff",
               "borderColor": "#377dff"
             },
             {
               "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
               "backgroundColor": "#e7eaf3",
               "borderColor": "#e7eaf3"
             }
           ];
           updatingChart.update();
         } else {
           updatingChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
           updatingChart.data.datasets = [
             {
               "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
               "backgroundColor": "#377dff",
               "hoverBackgroundColor": "#377dff",
               "borderColor": "#377dff"
             },
             {
               "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
               "backgroundColor": "#e7eaf3",
               "borderColor": "#e7eaf3"
             }
           ]
           updatingChart.update();
         }
        })

        
        // INITIALIZATION OF BUBBLE CHARTJS WITH DATALABELS PLUGIN
        // =======================================================
        $('.js-chart-datalabels').each(function () {
          $.HSCore.components.HSChartJS.init($(this), {
            plugins: [ChartDataLabels],
            options: {
              plugins: {
                datalabels: {
                  anchor: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  align: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  color: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                  },
                  font: function(context) {
                    var value = context.dataset.data[context.dataIndex],
                      fontSize = 25;

                    if (value.r > 50) {
                      fontSize = 35;
                    }

                    if (value.r > 70) {
                      fontSize = 55;
                    }

                    return {
                      weight: 'lighter',
                      size: fontSize
                    };
                  },
                  offset: 2,
                  padding: 0
                }
              }
            },
          });
        });

        
        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale: {
            format: 'M/DD hh:mm A'
          }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
          $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
        }, cb);

        cb(start, end);

        
        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });

        
        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function() {
          var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
      });
    </script>