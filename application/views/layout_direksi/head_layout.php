<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Great Green | <?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/template/admin/images/favicon.ico">

        <!-- third party css -->
        <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- Plugins css -->
        <link href="<?= base_url(); ?>/assets/template/admin/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/template/admin/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/assets/template/admin/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?= base_url(); ?>/assets/template/admin/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/admin/libs/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="<?= base_url('home'); ?>" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name ms-1">
                                    <i class="mdi mdi-chevron-down"></i>
                                    <?php echo $this->session->userdata('nama')?>
                                </span>
                                &nbsp;&nbsp;
                                <img src="
                                <?php 
                                if ($this->session->userdata('foto_profil')!=null) {
                                    echo base_url('/assets/image/profile/'.$this->session->userdata('foto_profil'));
                                } else {
                                    echo base_url('/assets/image/master/all/Profile_Green.svg');
                                }
                                ?>" alt="user-image" class="rounded-circle">
                            </a>

                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- profil -->
                                <a href="<?= base_url('master_user/profil_dr/'.$this->session->userdata('id')); ?>" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profil</span>
                                </a>

                                <div class="dropdown-divider"></div>
                
                                <!-- item-->
                                <?php echo anchor('Auth/logout','<span class="dropdown-item notify-item"><i class="fe-log-out"></i>Keluar</span>')?>                          
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a> -->
                
                            </div>
                        </li>
                    </ul>
                
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="<?= base_url(); ?>/assets/template/admin/images/logo-sm.png" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url(); ?>/assets/template/admin/images/logo-dark.png" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>
                
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="<?= base_url(); ?>/assets/template/admin/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url(); ?>/assets/template/admin/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>
                
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Menu Direksi</li>

                            <li>
                                <a href="<?php echo base_url('Dashboard_Direksi') ?>">
                                    <i data-feather="airplay"></i>
                                    <!-- <span class="badge bg-success rounded-pill float-end">4</span> -->
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Laporan</li>

                            <li>
                                <a href="<?php echo base_url('Laporan_Pemasukan/index') ?>">
                                    <i data-feather="trash"></i>
                                    <span> Pemasukan Sampah </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('Laporan_Penjualan/index') ?>">
                                    <i data-feather="shopping-bag"></i>
                                    <span> Penjualan Produk </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
