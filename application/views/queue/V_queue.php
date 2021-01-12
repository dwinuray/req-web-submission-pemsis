

<!-- Content -->
<div class="content container-fluid">


    <!-- Page Header -->
<div class="page-header">
  <div class="row align-items-center">
    <div class="col-sm mb-2 mb-sm-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-no-gutter">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Antrian</li>
        </ol>
      </nav>

      <h1 class="page-header-title">Antrian Saat Ini</h1>
    </div>


    <div class="col-sm-auto">
      <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#add-queue">
        <i class="tio-user-add mr-1"></i> Tambah Antrian Baru
      </a>
    </div>

 
  </div>
</div>
<!-- End Page Header -->


          <div class="row justify-content-lg-center">
            <div class="col-lg-11">


            <?php echo $this->session->flashdata('msg') ?>

                <!-- Card -->
<div class="card">
  <!-- Header -->
  <div class="card-header">
    <div class="row justify-content-between align-items-center flex-grow-1">
      <div class="col-12 col-md">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-header-title">Rekapan Antrian Terkini <?php echo date('d F Y H.i A') ?></h5>
        </div>
      </div>

      <div class="col-md-auto">
        <!-- Filter -->
        <div class="row align-items-center">
          <div class="col-auto">
            <!-- Select -->
            <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;"
                    data-target-column-index="1"
                    data-hs-select2-options='{
                      "minimumResultsForSearch": "Infinity",
                      "customClass": "custom-select custom-select-sm custom-select-borderless",
                      "dropdownAutoWidth": true,
                      "width": true
                    }'>
                <option value="">Any</option>
                <option value="Teller">Teller</option>
                <option value="Bank Office">Bank Office</option>
                <option value="Admin Kredit">Admin Kredit</option>
            </select>
            <!-- End Select -->
          </div>

          <div class="col">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input id="datatableWithFilterSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
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
    <table id="datatableWithFilter" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
           data-hs-datatables-options='{
             "columnDefs": [{
                "targets": [1],
                "orderable": false
              }],
             "order": [],
             "search": "#datatableWithFilterSearch",
             "isResponsive": false,
             "isShowPaging": false,
             "pagination": "datatableWithFilterPagination"
           }'>
      <thead class="thead-light">
        <tr>
          <th>Name</th>
          <th>Operational</th>
          <th>Date</th>
          <th>Status</th>
          <th>#</th>
        </tr>
      </thead>

      <tbody>

        <?php if ( $dataQueue->num_rows() > 0 ) {

            foreach ( $dataQueue->result() as $row ) {
         ?>
        <tr>
          <td>

            <?php
            
                $colorArr = ['danger', 'success', 'primary', 'warning'];
            ?>
            <a class="media align-items-center" href="javascript:void(0)">
              <div class="avatar avatar-soft-<?php echo $colorArr[rand(0,3)] ?> avatar-circle mr-3">
                <span class="avatar-initials"><?php echo $row->name[0] ?></span>
              </div>
              <div class="media-body">
                <span class="d-block h5 text-hover-primary mb-0"><?php echo $row->name ?></span>
                <span class="d-block font-size-sm text-body">Kode TR : <?php echo $row->kode_transaction ?></span>
              </div>
            </a>
          </td>
          <td>
            <span class="d-block h5 mb-0"><?php echo $row->type ?></span>
            <span class="d-block font-size-sm"><?php echo 'Bagian ' .$row->type.' '.rand(1, 2) ?></span>
          </td>
          <td>
                <small>Dibuat : <?php echo date('d M Y H.i A', strtotime( $row->start_service )) ?></small><br>
                <small>Dilayani : <?php echo $row->end_service ? date('d M Y H.i A', strtotime( $row->end_service )) : '-' ?></small>
          </td>
          <td>
            <span class="legend-indicator <?php echo ($row->status == "waiting") ? 'bg-warning' : 'bg-success' ?>"></span><?php echo ucfirst( $row->status ) ?>
          </td>
          <td>
            <!-- <a href="" class="text-sm text-main">
                <button type="button" class="btn btn-sm btn-soft-warning btn-icon""><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> </button> Tambahkan
            </a> -->
            <small>Antrian </small>
            <?php 
            
                $url = "javascript:void(0)";
                $class = "btn btn-soft-primary";
                $loader = "";
                $text = "Sudah Dilayani";
                $tag = "button";
                $extension = "disabled";
                if ( $row->status == "waiting" ) {

                    $loader = '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="false"></span>';
                    $url = base_url('queue/changeState/'. $row->id_transaction);
                    $class = "btn btn-soft-success";
                    $text = "Tambahkan Selesai";
                    $tag  = "a";
                    $extension = "";
                }
            ?>
            <<?php echo $tag ?> href="<?php echo $url ?>" class="btn btn-sm <?php echo $class ?>" <?php echo $extension ?> type="button">
                <?php echo $loader ?>
                <span><?php echo $text ?></span>
            </<?php echo $tag ?>>
          </td>
        </tr>

        <?php } } ?>
      </tbody>
    </table>
  </div>
  <!-- End Table -->




    <!-- Modal -->
<div class="modal fade" id="add-queue" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Antrian Manual</h5>
        <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>

      <form action="<?php echo base_url('queue/processAddQueue') ?>" method="POST">
      <div class="modal-body">
           <!-- Form Group -->
           <div class="row form-group">
                <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Kode Transaksi</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" name="kode" id="firstNameLabel" placeholder="Kode transaksi atau antrian . . .">
                    <small>Masukkan kode transaksi atau antrian</small>
                </div>
            </div>
            <!-- End Form Group -->
           
           <!-- Form Group -->
           <div class="row form-group">
                <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Nama Lengkap</label>

                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="firstNameLabel" placeholder="Nama Lengkap . . .">
                    <small>Masukkan nama lengkap customer</small>
                </div>
            </div>
            <!-- End Form Group -->



            <!-- Form Group -->
           <div class="row form-group">
                <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Segment Operational</label>

                <div class="col-sm-9">
                    <select id="exampleFormControlSelect1" name="operational" class="form-control">
                        <option>Pilih salah satu . . .</option>
                        <option value="Teller">Teller</option>
                        <option value="Bank Office">Bank Office</option>
                        <option value="Admin Kredit">Admin Kredit</option>
                    </select>
                    <small>Pilih operasi segmen pada bank</small>
                </div>
            </div>
            <!-- End Form Group -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambahkan Antrian</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->















  <!-- Footer -->
  <div class="card-footer">
    <!-- Pagination -->
    <div class="d-flex justify-content-center justify-content-sm-end">
      <nav id="datatableWithFilterPagination" aria-label="Activity pagination"></nav>
    </div>
    <!-- End Pagination -->
  </div>
  <!-- End Footer -->
</div>
<!-- End Card -->
              
            </div>
        </div>
</div>

              <!-- JS Plugins Init. -->
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


        // INITIALIZATION OF DATATABLES
        // =======================================================
        $.HSCore.components.HSDatatables.init($('#basicDatatable'));

        $.HSCore.components.HSDatatables.init($('#datatableWithPagination'));

        $.HSCore.components.HSDatatables.init($('#datatableWithEntries'));

        var datatableWithSearch = $.HSCore.components.HSDatatables.init($('#datatableWithSearch'), {
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="../assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('#datatableWithSearchInput').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatableWithSearch.search('').draw();
            }
          }, 1);
        });

        var datatableWithFilter = $.HSCore.components.HSDatatables.init($('#datatableWithFilter'), {
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="<?php echo base_url() ?>assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatableWithFilter.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableWithFilterSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatableWithFilter.search('').draw();
            }
          }, 1);
        });


        
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });
        
      });
    </script>