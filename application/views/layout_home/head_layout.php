<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDGs web |
        <?= $title ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/template/admin/images/sdgslogo.ico">

    <!-- ubold template -->
    <!-- third party css -->
    <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="<?= base_url(); ?>/assets/template/admin/css/config/default/bootstrap.min.css" rel="stylesheet"
        type="text/css" id="bs-default-stylesheet" />
    <link href="<?= base_url(); ?>/assets/template/admin/css/config/default/app.min.css" rel="stylesheet"
        type="text/css" id="app-default-stylesheet" />

    <!-- icons -->
    <link href="<?= base_url(); ?>/assets/template/admin/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="<?= base_url(); ?>/assets/template/admin/libs/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- Leaflet js -->
    <link rel="stylesheet" href="<?= base_url() ?>leaflet/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="<?= base_url() ?>leaflet/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
        crossorigin=""></script>
</head>

<!-- body start -->

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">
                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link arrow-none waves-effect waves-light" href="<?= base_url('home'); ?>">
                            Beranda
                        </a>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link arrow-none waves-effect waves-light" href="#" data-bs-toggle="dropdown">
                            Smart Manufactur
                        </a>
                        <div class="dropdown-menu dropdown-menu-end konsistensi-dropdown">
                            <!-- item-->
                            <a href="<?= base_url('home/konsistensi'); ?>" class="dropdown-item notify-item">
                                <span>Konsistensi EH</span>
                            </a>
                            <a href="<?= base_url('home/data_eh'); ?>" class="dropdown-item notify-item">
                                <span>Penginputan Data EH</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link arrow-none waves-effect waves-light" href="<?= base_url('home/sampah'); ?>">
                            Waste Management
                        </a>
                    </li>

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link arrow-none waves-effect waves-light" href="<?= base_url('home/tentang'); ?>">
                            Tentang
                        </a>
                    </li>

                    <li class="dropdown d-lg-none d-inline-block">
                        <a class="nav-link arrow-none waves-effect waves-light" href="#" data-bs-toggle="dropdown">
                        <i class="mdi mdi-chevron-down"></i> Menu
                        </a>
                        <div class="dropdown-menu dropdown-menu-end sm-dropdown">
                            <a class="dropdown-item notify-item" href="<?= base_url('home'); ?>">
                                Beranda
                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Smart Manufactur</h6>
                            </div>
                            <a href="<?= base_url('home/konsistensi'); ?>" class="dropdown-item notify-item">
                                <span>Konsistensi EH</span>
                            </a>
                            <a href="<?= base_url('home/data_eh'); ?>" class="dropdown-item notify-item">
                                <span>Penginputan Data EH</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item notify-item" href="<?= base_url('home/sampah'); ?>">
                                Waste Management
                            </a>                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item notify-item" href="<?= base_url('home/tentang'); ?>">
                                Tentang
                            </a>                            
                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                            href="<?= base_url('home'); ?>" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="pro-user-name ms-1">
                                <i class="mdi mdi-chevron-down"></i>
                                <?php if ($this->session->userdata('id') != null) {
                                    echo $this->session->userdata('nama');
                                } else {
                                    echo '';
                                } ?>
                            </span>
                            &nbsp;&nbsp;
                            <img src="
                                        <?php
                                        if ($this->session->userdata('foto_profil') != null) {
                                            echo base_url('/assets/image/profile/' . $this->session->userdata('foto_profil'));
                                        } else {
                                            echo base_url('/assets/image/master/all/Profile_Green.svg');
                                        }
                                        ?>
                                        " alt="user-image" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <?php
                            if ($this->session->userdata('id') != null) { ?>
                            <!-- item-->
                            <a href="<?= base_url('home/profil/' . $this->session->userdata('id')); ?>"
                                class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profil</span>
                            </a>
                            <?php } ?>



                            <div class="dropdown-divider"></div>

                            <?php
                            if ($this->session->userdata('id') != null) { ?>
                            <!-- item-->
                            <a href="<?= base_url('Auth/Logout'); ?>" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Keluar</span>
                            </a>
                            <?php } else { ?>
                            <!-- item-->
                            <a href="<?= base_url('Auth/Login'); ?>" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Masuk</span>
                            </a>
                            <?php } ?>

                        </div>
                    </li>
                </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?= base_url('home'); ?>" class="logo logo-dark text-center">
                    <span class="logo-sm">
                        <img src="<?= base_url(); ?>/assets/template/admin/images/sdgslogo.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url(); ?>/assets/template/admin/images/logo-dark.png" alt="" height="20">
                        <span>Website SDGs</span>
                    </span>
                </a>

                <a href="<?= base_url('home'); ?>" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="<?= base_url(); ?>/assets/template/admin/images/sdgslogo.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url(); ?>/assets/template/admin/images/sdgslogo.png" alt="" height="20">
                        <span>Website SDGs</span>
                    </span>
                </a>
            </div>

        </div>
    </div>
    <!-- end Topbar -->