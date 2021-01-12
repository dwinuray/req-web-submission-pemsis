
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>App Internship</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/vendor.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>vendor/icon-set/style.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/theme.minc619.css?v=1.0">


  <!-- JS Implementing Plugins -->
  <script src="<?php echo base_url('assets/') ?>js/vendor.min.js"></script>


  <?php $uri = $this->uri->segment(1); ?>
</head>
<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl">
  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->
  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <div class="navbar-brand-wrapper justify-content-between">
          <!-- Logo -->
          
          
            <a class="navbar-brand" href="../index.html" aria-label="Front">
              <img class="navbar-brand-logo" src="https://www.itn.ac.id/wp-content/uploads/2016/08/logo.png" style="width: 50px !important" alt="Logo">
              <img class="navbar-brand-logo-mini" src="<?php echo base_url('assets/') ?>svg/logos/logo-short.svg" alt="Logo">
            </a>
          
          <!-- End Logo -->

          <!-- Navbar Vertical Toggle -->
          <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
            <i class="tio-clear tio-lg"></i>
          </button>
          <!-- End Navbar Vertical Toggle -->
        </div>

        <!-- Content -->
        <div class="navbar-vertical-content">
          <ul class="navbar-nav navbar-nav-lg nav-tabs">
            <!-- Dashboards -->
            <li class="navbar-vertical-aside-has-menu <?php if ( $uri == "dashboard" ) echo 'active'; ?>">
              <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo base_url('dashboard') ?>" title="Dashboards">
                <i class="tio-home-vs-1-outlined nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
              </a>
            </li>
            <!-- End Dashboards -->

            <li class="nav-item">
              <small class="nav-subtitle" title="Pages">Navigation</small>
              <small class="tio-more-horizontal nav-subtitle-replacer"></small>
            </li>

            <!-- Pages -->
            <li class="navbar-vertical-aside-has-menu <?php if ( $uri == "queue" ) echo 'active'; ?>">
              <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo base_url('queue') ?>" title="Pages">
                <i class="tio-time nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Antrian</span>
              </a>
            </li>
            
            <!-- Pages -->
            <li class="navbar-vertical-aside-has-menu <?php if ( $uri == "report" ) echo 'active'; ?>">
              <a class="js-navbar-vertical-aside-menu-link nav-link" href="<?php echo base_url('report') ?>" title="Pages">
                <i class="tio-book-opened nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Rekapan Terkini</span>
              </a>
            </li>

            <li class="nav-item">
              <div class="nav-divider"></div>
            </li>

            <li class="nav-item">
              <small class="nav-subtitle" title="Documentation">Documentation</small>
              <small class="tio-more-horizontal nav-subtitle-replacer"></small>
            </li>

            <li class="nav-item ">
              <a class="js-nav-tooltip-link nav-link" href="" title="Documentation" data-placement="left">
                <i class="tio-book-opened nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Documentation <span class="badge badge-primary badge-pill ml-1">v1.1</span></span>
              </a>
            </li>

            <li class="nav-item ">
              <a class="js-nav-tooltip-link nav-link" href="" title="Components" data-placement="left">
                <i class="tio-layers-outlined nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Components</span>
              </a>
            </li>

            <li class="nav-item">
              <small class="tio-more-horizontal nav-subtitle-replacer"></small>
            </li>

            <!-- Front Builder -->
            <li class="nav-item nav-footer-item ">
              <a class="d-none d-md-flex js-hs-unfold-invoker nav-link nav-link-toggle" href="javascript:;"
                 data-hs-unfold-options='{
                   "target": "#styleSwitcherDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeInRight",
                   "animationOut": "fadeOutRight",
                   "hasOverlay": true,
                   "smartPositionOff": true
                 }'>
                <i class="tio-tune nav-icon"></i>
              </a>
              <a class="d-flex d-md-none nav-link nav-link-toggle" href="javascript:;">
                <i class="tio-tune nav-icon"></i>
              </a>
            </li>
            <!-- End Front Builder -->

            <!-- Help -->
            <li class="navbar-vertical-aside-has-menu nav-footer-item ">
              <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Help">
                <i class="tio-home-vs-1-outlined nav-icon"></i>
                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Help</span>
              </a>

              <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                  <a class="nav-link" href="#" title="Resources &amp; tutorials">
                    <i class="tio-book-outlined dropdown-item-icon"></i> Resources &amp; tutorials
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" title="Keyboard shortcuts">
                    <i class="tio-command-key dropdown-item-icon"></i> Keyboard shortcuts
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" title="Connect other apps">
                    <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" title="What's new?">
                    <i class="tio-gift dropdown-item-icon"></i> What's new?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" title="Contact support">
                    <i class="tio-chat-outlined dropdown-item-icon"></i> Contact support
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Help -->

          
          </ul>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Unfold -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                   data-hs-unfold-options='{
                    "target": "#styleSwitcherDropdown",
                    "type": "css-animation",
                    "animationIn": "fadeInRight",
                    "animationOut": "fadeOutRight",
                    "hasOverlay": true,
                    "smartPositionOff": true
                   }'>
                  <i class="tio-tune"></i>
                </a>
              </div>
              <!-- End Unfold -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                   data-hs-unfold-options='{
                    "target": "#otherLinksDropdown",
                    "type": "css-animation",
                    "animationIn": "slideInDown",
                    "hideOnScroll": true
                   }'>
                  <i class="tio-help-outlined"></i>
                </a>

                <div id="otherLinksDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                  <span class="dropdown-header">Help</span>
                  <a class="dropdown-item" href="#">
                    <i class="tio-book-outlined dropdown-item-icon"></i>
                    <span class="text-truncate pr-2" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="tio-command-key dropdown-item-icon"></i>
                    <span class="text-truncate pr-2" title="Keyboard shortcuts">Keyboard shortcuts</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="tio-alt dropdown-item-icon"></i>
                    <span class="text-truncate pr-2" title="Connect other apps">Connect other apps</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="tio-gift dropdown-item-icon"></i>
                    <span class="text-truncate pr-2" title="What's new?">What's new?</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Contacts</span>
                  <a class="dropdown-item" href="#">
                    <i class="tio-chat-outlined dropdown-item-icon"></i>
                    <span class="text-truncate pr-2" title="Contact support">Contact support</span>
                  </a>
                </div>
              </div>
              <!-- End Other Links -->
            </li>

           
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Navbar Vertical -->








    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">

















<?php $this->load->view($namemodule.'/'.$namefileview) ?>



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">&copy; <span class="d-none d-sm-inline-block"><?php echo date('Y') ?> Institut Teknologi Nasional Malang</span></p>
            </div>
            
          </div>
        </div>
      

      
      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->











  <!-- ========== SECONDARY CONTENTS ========== -->




  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <i class="tio-clear tio-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="<?php echo base_url('assets/') ?>svg/illustrations/graphs.svg" alt="Image Description">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?php echo base_url('assets/') ?>svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?php echo base_url('assets/') ?>svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?php echo base_url('assets/') ?>svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?php echo base_url('assets/') ?>svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->




  <!-- JS Front -->
  <script src="<?php echo base_url('assets/') ?>js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
      // =======================================================
      var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


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
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?php echo base_url('assets/') ?>vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>
</html>