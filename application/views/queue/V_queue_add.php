

<!-- Content -->
<div class="content container-fluid">


    <!-- Page Header -->
<div class="page-header">
  <div class="row align-items-center">
    <div class="col-sm mb-2 mb-sm-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-no-gutter">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Antrian</li>
        </ol>
      </nav>

      <h1 class="page-header-title">Tambah Antrian Baru</h1>
    </div>

 
  </div>
</div>
<!-- End Page Header -->



        <!-- Step Form -->
        <form class="js-step-form py-md-5"
              data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }'>
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">

              <!-- Content Step Form -->
              <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label class="col-sm-3 col-form-label input-label">Avatar</label>

                      <div class="col-sm-9">
                        <div class="d-flex align-items-center">
                          <!-- Avatar -->
                          <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                            <img id="avatarImg" class="avatar-img" src="<?php echo base_url('assets/') ?>img/160x160/img1.jpg" alt="Image Description">

                            <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader"
                                   data-hs-file-attach-options='{
                                      "textTarget": "#avatarImg",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "resetTarget": ".js-file-attach-reset-img",
                                      "resetImg": "./<?php echo base_url('assets/') ?>img/160x160/img1.jpg",
                                      "allowTypes": [".png", ".jpeg", ".jpg"]
                                   }'>

                            <span class="avatar-uploader-trigger">
                              <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                            </span>
                          </label>
                          <!-- End Avatar -->

                          <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    

                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="no_induk" class="col-sm-3 col-form-label input-label">Nomor Induk <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Nomer Kode di dapatkan pada waktu di memilih lokasi tempat bekerja."></i></label>

                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="induk" id="no_induk" placeholder="Nomor Induk Tenaga Kontrak">
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Nama Lengkap</label>

                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" id="firstNameLabel" placeholder="Nama Lengkap . . .">
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">TTL <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tempat tanggal lahir."></i></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break">
                          <input type="text" class="form-control" name="tempat" id="firstNameLabel" placeholder="Tempat Lahir . . ." >
                          <input type="text" class="js-flatpickr form-control" name="tanggal" id="lastNameLabel" placeholder="Tanggal Lahir . . ."  data-hs-flatpickr-options='{
                                "dateFormat": "d/m/Y"
                            }' >
                         
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    
                    
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Jenis Kelamin</label>

                      <div class="col-sm-9">
                          <!-- Form Check -->
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customInlineRadio1" class="custom-control-input" name="customInlineRadio">
                                <label class="custom-control-label" for="customInlineRadio1">Laki-laki</label>
                            </div>
                            </div>
                            <!-- End Form Check -->

                            <!-- Form Check -->
                            <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customInlineRadio2" class="custom-control-input indeterminate-checkbox" checked name="customInlineRadio">
                                <label class="custom-control-label" for="customInlineRadio2">Perempuan</label>
                            </div>
                        </div>
                        <!-- End Form Check --><br>
                        <small>Pilih jenis kelamin</small>
                      </div>
                    </div>
                    <!-- End Form Group -->


                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="emailLabel" class="col-sm-3 col-form-label input-label">Agama</label>

                      <div class="col-sm-9">
                        <select id="exampleFormControlSelect1" class="form-control">
                            <option>Pilih salah satu . . .</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Budha</option>
                            <option>Hindu</option>
                        </select>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="emailLabel" class="col-sm-3 col-form-label input-label">Status</label>

                      <div class="col-sm-9">
                        <!-- Input Group -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <select class="custom-select">
                                <option value="1" selected="">Status Belum Menikah</option>
                                <option value="2">Status Sudah Menikah</option>
                                </select>
                            </div>

                            <input type="number" class="form-control" placeholder="Jumlah anak">

                        </div>
                        <!-- End Input Group -->
                      </div>
                    </div>
                    <!-- End Form Group -->
                    
                    
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="emailLabel" class="col-sm-3 col-form-label input-label">Alamat</label>

                      <div class="col-sm-9">
                        <textarea id="exampleFormControlTextarea1" class="form-control" placeholder="Alamat lengkap . . ." rows="2"></textarea>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-add-field row form-group"
                         data-hs-add-field-options='{
                            "template": "#addPhoneFieldTemplate",
                            "container": "#addPhoneFieldContainer",
                            "defaultCreated": 0
                          }'>
                      <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break align-items-center">
                          <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                                 data-hs-mask-options='{
                                   "template": "+0(000)000-00-00"
                                 }'>

                          <div class="input-group-append">
                            <!-- Select -->
                            <div class="select2-custom">
                              <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" name="phoneSelect"
                                    data-hs-select2-options='{
                                      "minimumResultsForSearch": "Infinity",
                                      "dropdownAutoWidth": true,
                                      "width": "6rem"
                                    }'>
                                <option value="Mobile" selected>Mobile</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                                <option value="Fax">Fax</option>
                                <option value="Direct">Direct</option>
                              </select>
                              <!-- End Select -->
                            </div>
                          </div>
                        </div>

                        <!-- Container For Input Field -->
                        <div id="addPhoneFieldContainer"></div>

                        <a class="js-create-field form-link btn btn-sm btn-no-focus btn-ghost-primary" href="javascript:;">
                          <i class="tio-add"></i> Add phone
                        </a>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Add Phone Input Field -->
                    <div id="addAddressFieldTemplate" style="display: none;">
                      <div class="input-group-add-field">
                        <input type="text" class="form-control" data-name="addressLine" placeholder="Your address" aria-label="Your address">

                        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                          <i class="tio-clear"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Add Phone Input Field -->

                    <!-- Add Phone Input Field -->
                    <div id="addPhoneFieldTemplate" class="input-group-add-field" style="display: none;">
                      <div class="input-group input-group-sm-down-break align-items-center">
                        <input type="text" class="js-masked-input form-control" data-name="additionlPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                               data-hs-mask-options='{
                                 "template": "+0(000)000-00-00"
                               }'>

                        <div class="input-group-append">
                          <!-- Select -->
                          <div class="select2-custom">
                            <select class="js-select2-custom-dynamic custom-select" size="1" style="opacity: 0;" data-name="additionlPhoneSelect"
                                    data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity",
                                    "dropdownAutoWidth": true,
                                    "width": "6rem"
                                  }'>
                              <option value="Mobile" selected>Mobile</option>
                              <option value="Home">Home</option>
                              <option value="Work">Work</option>
                              <option value="Fax">Fax</option>
                              <option value="Direct">Direct</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>

                      <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                        <i class="tio-clear"></i>
                      </a>
                    </div>
                    <!-- End Add Phone Input Field -->

                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Pendidikan <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Pendidikan terakhir"></i></label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="Pendidikan terakhir" aria-label="Htmlstream">
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Jabatan</label>

                      <div class="col-sm-9">
                        <input type="text" value="STAF" class="form-control" name="department" id="departmentLabel" disabled="">
                      </div>
                    </div>
                    <!-- End Form Group -->


                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="departmentLabel" class="col-sm-3 col-form-label input-label">Unit Kerja</label>

                      <div class="col-sm-9">
                        <select id="exampleFormControlSelect1" class="form-control">
                            <option>Pilih unti kerja</option>
                            <option>Bagian</option>
                            <option>Badan</option>
                            <option>Dinas</option>
                            <option>Unit Lain nya</option>
                        </select>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    
                    
                    <!-- Form Group -->
                    <div class="row form-group">
                      <label for="departmentLabel" class="col-sm-3 col-form-label input-label">UPT <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Ada Dinas tertentu yg mempunyai UPT"></i></label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="department" id="departmentLabel" placeholder="Unit Pelaksana Teknis">
                      </div>
                    </div>
                    <!-- End Form Group -->
                    


                    <!-- Form Group -->
                    <div class="row form-group">
                      <label class="col-sm-3 col-form-label input-label">Tanggal Kontrak <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tanggal awal kontrak"></i></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break">                                  
                            <input type="text" class="js-flatpickr-tgl-awal form-control" name="tanggal" id="lastNameLabel" placeholder="Tanggal Awal Kontrak . . ."  data-hs-flatpickr-options='{
                                "dateFormat": "d/m/Y"
                            }' >
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->




                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-outline-primary">Batalkan Pengisian </button> &nbsp;
                    <button type="button" class="btn btn-primary">Tambahkan dan Simpan </button>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->
              </div>
              <!-- End Content Step Form -->
            </div>
        </div>
    </form>
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

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF STEP FORM
        // =======================================================
        $('.js-step-form').each(function () {
          var stepForm = new HSStepForm($(this), {
            finish: function() {
              $("#addUserStepFormProgress").hide();
              $("#addUserStepFormContent").hide();
              $("#successMessageContent").show();
            }
          }).init();
        });

        
        // INITIALIZATION OF MASKED INPUT
        // =======================================================
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
          new HSAddField($(this), {
            addedField: function() {
              $('.js-add-field .js-select2-custom-dynamic').each(function () {
                var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
              });
            }
          }).init();
        });


        // INITIALIZATION OF FLATPICKR
        // =======================================================
        $('.js-flatpickr').each(function () {
            $.HSCore.components.HSFlatpickr.init($(this));
        });

        $('.js-flatpickr-tgl-awal').each(function () {
            $.HSCore.components.HSFlatpickr.init($(this));
        });
        
      });
    </script>