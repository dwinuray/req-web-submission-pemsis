
<!DOCTYPE html>
<html lang="en" class="h-100">
  
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>App - Internship | Halaman Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>vendor/icon-set/style.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/theme.minc619.css?v=1.0">
  </head>

  <body class="d-flex align-items-center min-h-100">
    <!-- ========== HEADER ========== -->
    <header class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
      <div class="d-flex d-lg-none justify-content-between">
        <a href="index.html">
          <img class="w-100" src="<?php echo base_url('assets/') ?>svg/logos/logo.svg" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
        </a>

      </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
      <!-- Content -->
      <div class="container-fluid px-3">
        <div class="row">
          <!-- Cover -->
          <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
            <!-- Logo & Language -->
            <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
              <div class="d-none d-lg-flex justify-content-between">
                <a href="index.html">
                  <img class="w-100" src="https://www.itn.ac.id/wp-content/uploads/2016/08/logo.png" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
                </a>

            
              </div>
            </div>
            <!-- End Logo & Language -->

            <div style="max-width: 23rem;">
              <div class="text-center mb-5">
                <img class="img-fluid" src="<?php echo base_url('assets/') ?>svg/illustrations/chat.svg" alt="Image Description" style="width: 12rem;">
              </div>

              <div class="mb-5">
                <h2 class="display-4">Halo para Internship :</h2>
              </div>

              <!-- List Checked -->
              <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">Rekapanku dan Pelaporan</span>
                  Build, run, and scale your apps - end to end
                </li>

                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">Pencatatan Keuangan</span>
                  It brings together your tasks, projects, timelines, files and more
                </li>
              </ul>
              <!-- End List Checked -->

              <!-- End Row -->
            </div>
          </div>
          <!-- End Cover -->

          <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
            <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
              <!-- Form -->
              <form class="js-validate" action="<?php echo base_url('dashboard') ?>" type="POST">
                <div class="text-center mb-5">
                  <h1 class="display-4">Login</h1>
                  <p>Halo selamat datang, login terlebih dahulu ya.</p>
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrEmail">Your email</label>

                  <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@example.com" aria-label="Markwilliams@example.com" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrPassword" tabindex="0">
                    <span class="d-flex justify-content-between align-items-center">
                      Password
                      <a class="input-label-secondary" href="">Forgot Password?</a>
                    </span>
                  </label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-msg="Your password is invalid. Please try again."
                           data-hs-toggle-password-options='{
                             "target": "#changePassTarget",
                             "defaultClass": "tio-hidden-outlined",
                             "showClass": "tio-visible-outlined",
                             "classChangeTarget": "#changePassIcon"
                           }'>
                    <div id="changePassTarget" class="input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i id="changePassIcon" class="tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                    <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                  </div>
                </div>
                <!-- End Checkbox -->

                <button type="submit" class="btn btn-lg btn-block btn-primary">Masuk</button>
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="<?php echo base_url('assets/') ?>js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="<?php echo base_url('assets/') ?>js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });


        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this));
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo base_url('assets/') ?>vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

</html>