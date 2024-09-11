<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Admin Dashboard &mdash; Hotel Management</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/modules/bootstrap/css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/modules/fontawesome/css/all.min.css')?>">

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/modules/jqvmap/dist/jqvmap.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/modules/summernote/summernote-bs4.css')?>">
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')?>">

<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/css/style.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('adminassets/assets/css/components.min.css')?>">

</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                        <div class="search-header">Histories</div>
                        <div class="search-item">
                            <a href="#">How to Used HTML in Laravel</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="https://themeforest.net/user/admincraft/portfolio" target="_black">Admincraft Portfolio</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="#">#CodiePie</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-header">Result</div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="<?php echo base_url('adminassets/assets/img/products/product-3-50.png')?>" alt="product">
                                oPhone 11 Pro
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="<?php echo base_url('adminassets/assets/img/products/product-2-50.png')?>" alt="product">
                                Drone Zx New Gen-3
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="<?php echo base_url('adminassets/assets/img/products/product-1-50.png')?>" alt="product">
                                Headphone JBL
                            </a>
                        </div>
                        <div class="search-header">Projects</div>
                        <div class="search-item">
                            <a href="https://themeforest.net/item/epice-laravel-admin-template-for-hr-project-management/24466729" target="_black">
                                <div class="search-icon bg-danger text-white mr-3"><i class="fas fa-code"></i></div>
                                Epice Laravel - Admin Template
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="https://themeforest.net/item/soccer-project-management-admin-template-ui-kit/24646866" target="_black">
                                <div class="search-icon bg-primary text-white mr-3"><i class="fas fa-laptop"></i></div>
                                Soccer - Admin Template
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Messages
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-message">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-1.png')?>" class="rounded-circle">
                                <div class="is-online"></div>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Kusnaedi</b>
                                <p>Hello, Bro!</p>
                                <div class="time">10 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-2.png')?>" class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Dedik Sugiharto</b>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-3.png')?>" class="rounded-circle">
                                <div class="is-online"></div>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Agung Ardiansyah</b>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-4.png')?>" class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Ardian Rahardiansyah</b>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                <div class="time">16 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-avatar">
                                <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-5.png')?>" class="rounded-circle">
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Alfa Zulkarnain</b>
                                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                <div class="time">Yesterday</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                    </div>
                    </div>
                </li>
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Notifications
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-icon bg-primary text-white">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="dropdown-item-desc"> Template update is available now!
                                <div class="time text-primary">2 Min Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                <div class="time">10 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-success text-white">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-danger text-white">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Low disk space. Let's clean it!
                                <div class="time">17 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Welcome to CodiePie template!
                                <div class="time">Yesterday</div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                    </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-1.png')?>" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, Michelle Green</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">Admin</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="index-0.html">Analytics</a></li>
                            <li class="active"><a class="nav-link" href="index-2.html">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Starter</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                            
                            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-alert.html')?>">Alert</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-badge.html')?>">Badge</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-breadcrumb.html')?>">Breadcrumb</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-buttons.html')?>">Buttons</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-card.html')?>">Card</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-carousel.html')?>">Carousel</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-collapse.html')?>">Collapse</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-dropdown.html')?>">Dropdown</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-form.html')?>">Form</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-list-group.html')?>">List Group</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-media-object.html')?>">Media Object</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-modal.html')?>">Modal</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-nav.html')?>">Nav</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-navbar.html')?>">Navbar</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-pagination.html')?>">Pagination</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-popover.html')?>">Popover</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-progress.html')?>">Progress</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-table.html')?>">Table</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-tooltip.html')?>">Tooltip</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/bootstrap-typography.html')?>">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">CodiePie</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-article.html')?>">Article</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url('adminassets/components-avatar.html')?>">Avatar</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-chat-box.html')?>">Chat Box</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url('adminassets/components-empty-state.html')?>">Empty State</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-gallery.html')?>">Gallery</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url('adminassets/components-hero.html')?>">Hero</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-multiple-upload.html')?>">Multiple Upload</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url('adminassets/components-pricing.html')?>">Pricing</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-statistic.html')?>">Statistic</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-tab.html')?>">Tab</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-table.html')?>">Table</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/components-user.html')?>">User</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url('adminassets/components-wizard.html')?>">Wizard</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/forms-advanced-form.html')?>">Advanced Form</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/forms-editor.html')?>">Editor</a></li>
                            <li><a class="nav-link" href="<?php echo base_url('adminassets/forms-validation.htm')?>">Validation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                            <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                            <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                            <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                            <li><a href="gmaps-marker.html">Marker</a></li>
                            <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                            <li><a href="gmaps-route.html">Route</a></li>
                            <li><a href="gmaps-simple.html">Simple</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                        <ul class="dropdown-menu">
                            <li class="menu-sub-header">Apps</li>
                            <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                            
                            <li class="menu-sub-header">Charts</li>
                            <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                            <li><a class="nav-link" href="modules-apex-charts.html">Apex Charts</a></li>
                            <li><a class="nav-link" href="modules-e-charts.html">E Charts</a></li>
                            <li><a class="nav-link" href="modules-c3-charts.html">C3 Charts</a></li>
                            <li><a class="nav-link" href="modules-knob-charts.html">Knob Charts</a></li>
                            <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                            <li class="menu-sub-header">Tables</li>
                            <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                            <li><a class="nav-link" href="modules-table-more.html">More</a></li>
                            <li class="menu-sub-header">Font Icons</li>
                            <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                            <li><a class="nav-link" href="modules-line-icons.html">Line Icons</a></li>
                            <li><a class="nav-link" href="modules-feather-icons.html">Feather Icons</a></li>
                            <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                            <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                            <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                            <li class="menu-sub-header">Other</li>
                            <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                            <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                            <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                            <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Pages</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="auth-forgot-password.html">Forgot Password</a></li> 
                            <li><a href="auth-login.html">Login</a></li> 
                            <li><a href="auth-register.html">Register</a></li> 
                            <li><a href="auth-reset-password.html">Reset Password</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="errors-503.html">503</a></li> 
                            <li><a class="nav-link" href="errors-403.html">403</a></li> 
                            <li><a class="nav-link" href="errors-404.html">404</a></li> 
                            <li><a class="nav-link" href="errors-500.html">500</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                            <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                            <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                            <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                            <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                            <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                            <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="utilities-contact.html">Contact</a></li>
                            <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                            <li><a href="utilities-subscribe.html">Subscribe</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> Documentation</a>
                </div>
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                        <div class="card-stats-title">Order Statistics - 
                            <div class="dropdown d-inline">
                            <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                            <ul class="dropdown-menu dropdown-menu-sm">
                                <li class="dropdown-title">Select Month</li>
                                <li><a href="#" class="dropdown-item">January</a></li>
                                <li><a href="#" class="dropdown-item">February</a></li>
                                <li><a href="#" class="dropdown-item">March</a></li>
                                <li><a href="#" class="dropdown-item">April</a></li>
                                <li><a href="#" class="dropdown-item">May</a></li>
                                <li><a href="#" class="dropdown-item">June</a></li>
                                <li><a href="#" class="dropdown-item">July</a></li>
                                <li><a href="#" class="dropdown-item active">August</a></li>
                                <li><a href="#" class="dropdown-item">September</a></li>
                                <li><a href="#" class="dropdown-item">October</a></li>
                                <li><a href="#" class="dropdown-item">November</a></li>
                                <li><a href="#" class="dropdown-item">December</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">24</div>
                                <div class="card-stats-item-label">Pending</div>
                            </div>
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">12</div>
                                <div class="card-stats-item-label">Shipping</div>
                            </div>
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">23</div>
                                <div class="card-stats-item-label">Completed</div>
                            </div>
                        </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Orders</h4>
                        </div>
                        <div class="card-body">
                            59
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                        <canvas id="balance-chart" height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                        <div class="card-header">
                            <h4>Balance</h4>
                        </div>
                        <div class="card-body">
                            $187,13
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                        <canvas id="sales-chart" height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="card-wrap">
                        <div class="card-header">
                            <h4>Sales</h4>
                        </div>
                        <div class="card-body">
                            4,732
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="<?php echo base_url('adminassets/assets/bundles/lib.vendor.bundle.js')?>"></script>
<script src="<?php echo base_url('adminassets/js/CodiePie.js')?>"></script>

<!-- JS Libraies -->
<script src="<?php echo base_url('adminassets/assets/modules/jquery.sparkline.min.js')?>"></script>
<script src="<?php echo base_url('adminassets/assets/modules/chart.min.js')?>"></script>
<script src="<?php echo base_url('adminassets/assets/modules/owlcarousel2/dist/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('adminassets/assets/modules/summernote/summernote-bs4.js')?>"></script>
<script src="<?php echo base_url('adminassets/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('adminassets/js/page/index.js')?>"></script>

<!-- Template JS File -->
<script src="<?php echo base_url('adminassets/js/scripts.js')?>"></script>
<script src="<?php echo base_url('adminassets/js/custom.js')?>"></script>
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>