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
                
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?php echo base_url('adminassets/assets/img/avatar/avatar-1.png')?>" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, Michelle Green</div></a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Change Password</a>
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
                    </li>
                    <li class="menu-header">Add Menu</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i><span>Drinks</span></a>
                        
                    </li>
                    <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Lunch</span></a></li>
                    <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Dinner</span></a></li>
                    <li class="menu-header">Home Page Settings</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Change Crousal Image</span></a>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Change Heading</span></a>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Change Subheadings</span></a>
                       
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Gallery</span></a>

                    </li>
                    <li class="menu-header">Bookings</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Total Bookings</span></a>
                        
                    </li>
                    
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