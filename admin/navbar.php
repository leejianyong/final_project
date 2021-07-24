<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Dashboard | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/icon-set/style.css">
    <link rel="stylesheet" href="./assets/vendor/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="./assets/vendor/chart.js/dist/Chart.min.css">
    <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">
    

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
  </head>

  <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    
      <script src="./assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    

    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
      <form class="input-group input-group-merge input-group-borderless">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="tio-search"></i>
          </div>
        </div>

        <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">

        <div class="input-group-append">
          <div class="input-group-text">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker" href="javascript:;"
                 data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
                <i class="tio-clear tio-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- End Search Form -->

    <!-- ========== HEADER ========== -->
    
      <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="./index.html" aria-label="Front">
              <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo">
              <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo">
            </a>
            <!-- End Logo -->
          </div>

          <div class="navbar-nav-wrap-content-left">
            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
              <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
              <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
            </button>
            <!-- End Navbar Vertical Toggle -->

            <!-- Search Form -->
            <div class="d-none d-md-block">
              <form class="position-relative">
                <!-- Input Group -->
                <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tio-search"></i>
                    </div>
                  </div>
                  <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front"
                         data-hs-form-search-options='{
                           "clearIcon": "#clearSearchResultsIcon",
                           "dropMenuElement": "#searchDropdownMenu",
                           "dropMenuOffset": 20,
                           "toggleIconOnFocus": true,
                           "activeClass": "focus"
                         }'>
                  <a class="input-group-append" href="javascript:;">
                    <span class="input-group-text">
                      <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                    </span>
                  </a>
                </div>
                <!-- End Input Group -->

                <!-- Card Search Content -->
                <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                  <!-- Body -->
                  <div class="card-body-height py-3">
                    <small class="dropdown-header mb-n2">Recent searches</small>

                    <div class="dropdown-item bg-transparent text-wrap my-2">
                      <span class="h4 mr-1">
                        <a class="btn btn-xs btn-soft-dark btn-pill" href="./index.html">
                          Gulp <i class="tio-search ml-1"></i>
                        </a>
                      </span>
                      <span class="h4">
                        <a class="btn btn-xs btn-soft-dark btn-pill" href="./index.html">
                          Notification panel <i class="tio-search ml-1"></i>
                        </a>
                      </span>
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <small class="dropdown-header mb-n2">Tutorials</small>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                          <i class="tio-tune"></i>
                        </span>

                        <div class="media-body text-truncate">
                          <span>How to set up Gulp?</span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                          <i class="tio-paint-bucket"></i>
                        </span>

                        <div class="media-body text-truncate">
                          <span>How to change theme color?</span>
                        </div>
                      </div>
                    </a>

                    <div class="dropdown-divider my-3"></div>

                    <small class="dropdown-header mb-n2">Members</small>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <img class="avatar avatar-xs avatar-circle mr-2" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        <div class="media-body text-truncate">
                          <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <img class="avatar avatar-xs avatar-circle mr-2" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        <div class="media-body text-truncate">
                          <span>David Harrison</span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                          <span class="avatar-initials">A</span>
                        </div>
                        <div class="media-body text-truncate">
                          <span>Anne Richard</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="./index.html">
                    See all results
                    <i class="tio-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
                <!-- End Card Search Content -->
              </form>
            </div>
            <!-- End Search Form -->
          </div>

          <!-- Secondary Content -->
          <div class="navbar-nav-wrap-content-right">
            <!-- Navbar -->
            <ul class="navbar-nav align-items-center flex-row">
              <li class="nav-item d-md-none">
                <!-- Search Trigger -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#searchDropdown",
                       "type": "css-animation",
                       "animationIn": "fadeIn",
                       "hasOverlay": "rgba(46, 52, 81, 0.1)",
                       "closeBreakpoint": "md"
                     }'>
                    <i class="tio-search"></i>
                  </a>
                </div>
                <!-- End Search Trigger -->
              </li>

           


              <li class="nav-item">
                <!-- Account -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#accountNavbarDropdown",
                       "type": "css-animation"
                     }'>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>

                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-circle mr-2">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="card-title h5">Mark Williams</span>
                          <span class="card-text">mark@example.com</span>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Settings">Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                    </a>
                  </div>
                </div>
                <!-- End Account -->
              </li>
            </ul>
            <!-- End Navbar -->
          </div>
          <!-- End Secondary Content -->
        </div>
      </header>
    

    

    
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    
      <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
          <div class="navbar-vertical-footer-offset">
            <div class="navbar-brand-wrapper justify-content-between">
              <!-- Logo -->
              
              
                <a class="navbar-brand" href="./index.html" aria-label="Front">
                  <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo">
                  <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo">
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
                <li class="navbar-vertical-aside-has-menu show">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle active" href="javascript:;" title="Dashboards">
                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link active" href="./index.html" title="Default">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Default</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./dashboard-alternative.html" title="Alternative">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Alternative</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Dashboards -->

                <li class="nav-item">
                  <small class="nav-subtitle" title="Pages">Pages</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <!-- Pages -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Pages">
                    <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Pages</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Users</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./users.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./users-leaderboard.html" title="Leaderboard">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Leaderboard</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./users-add-user.html" title="Add User">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Add User <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="User Profile">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">User Profile <span class="badge badge-primary badge-pill ml-1">5</span></span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile.html" title="Profile">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Profile</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-teams.html" title="Teams">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Teams</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-projects.html" title="Projects">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Projects</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-connections.html" title="Connections">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Connections</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-my-profile.html" title="My Profile">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">My Profile</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Account">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Account</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./account-settings.html" title="Settings">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Settings</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./account-billing.html" title="Billing">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Billing</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./account-invoice.html" title="Invoice">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Invoice</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./account-api-keys.html" title="API Keys">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">API Keys</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">E-commerce</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./ecommerce.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                          <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Products">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Products</span>
                          </a>

                          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-products.html" title="Products">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Products</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-product-details.html" title="Product Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Product Details</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-add-product.html" title="Add Product">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Add Product</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                          <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Orders</span>
                          </a>

                          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-orders.html" title="Orders">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Orders</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-order-details.html" title="Order Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Order Details</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                          <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customers">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Customers</span>
                          </a>

                          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-customers.html" title="Customers">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Customers</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-customer-details.html" title="Customer Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Customer Details</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-add-customers.html" title="Add Customers">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Add Customers</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link " href="./ecommerce-manage-reviews.html" title="Manage Reviews">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Manage Reviews</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./ecommerce-checkout.html" title="Checkout">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Checkout</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Projects">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Projects</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./projects.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./projects-timeline.html" title="Timeline">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Timeline</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Project">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Project</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./project.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-files.html" title="Files">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Files <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-activity.html" title="Activity">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Activity</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-teams.html" title="Teams">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Teams</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-settings.html" title="Settings">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="./referrals.html" title="Referrals">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Referrals</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Pages -->

                <!-- Apps -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
                    <i class="tio-apps nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Apps <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-kanban.html" title="Kanban">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Kanban</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-calendar.html" title="Calendar">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Calendar <span class="badge badge-info badge-pill ml-1">New</span></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-invoice-generator.html" title="Invoice Generator">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Invoice Generator</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-file-manager.html" title="File Manager">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">File Manager</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Apps -->

                <!-- Authentication -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Authentication">
                    <i class="tio-lock-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Authentication</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign In">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Sign In</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signin-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signin-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign Up">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Sign Up</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signup-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signup-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Reset Password">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Reset Password</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-reset-password-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-reset-password-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Email Verification">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Email Verification</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-email-verification-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-email-verification-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="2-step Verification">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">2-step Verification</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-two-step-verification-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-two-step-verification-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#welcomeMessageModal" title="Welcome Message">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Welcome Message</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="./error-404.html" title="Error 404">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Error 404</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="./error-500.html" title="Error 500">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Error 500</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Authentication -->

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link " href="./welcome-page.html" title="Welcome page" data-placement="left">
                    <i class="tio-visible-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Welcome Page</span>
                  </a>
                </li>

               

                <li class="nav-item">
                  <div class="nav-divider"></div>
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

                <!-- Language -->
                <li class="navbar-vertical-aside-has-menu nav-footer-item ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Language">
                    <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Language</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="English (US)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                        English (US)
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="English (UK)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                        English (UK)
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Deutsch">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                        Deutsch
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Dansk">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                        Dansk
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Italiano">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                        Italiano
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="中文 (繁體)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                        中文 (繁體)
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Language -->
              </ul>
            </div>
            <!-- End Content -->

          </div>
        </div>
      </aside>
    
    <!-- End Navbar Vertical -->