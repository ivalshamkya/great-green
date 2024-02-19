
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SDGs Web | <?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/template/admin/images/favicon.ico">

		<!-- App css -->
		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="<?= base_url(); ?>/assets/template/admin/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="<?= base_url(); ?>/assets/template/admin/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <br/>
                        <div class="card bg-pattern mt-4">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="<?= base_url('Home')?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="<?= base_url(); ?>/assets/template/admin/images/logo-dark.png" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="<?= base_url(); ?>/assets/template/admin/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Masukkan Username dan Password yang sudah Anda daftarkan sebelumnya.</p>
                                </div>

                                <?php
                                    if ($this->session->flashdata('pesan_error')) {
                                        echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                                        echo $this->session->flashdata('pesan_error');
                                        echo '</div>';
                                    }
                                    if ($this->session->flashdata('pesan_success')) {
                                        echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                                        echo $this->session->flashdata('pesan_success');
                                        echo '</div>';
                                    }
                                ?>

                                <?php echo form_open('Auth/login') ?>

                                    <div class="mb-2">
                                        <label class="form-label">Username</label>
                                        <input class="form-control<?php if(form_error('username')!=null){echo ' is-invalid';} ?>" type="text" name="username" placeholder="Masukkan Username Anda.." >
                                        <small class="form-text text-danger"><?= form_error('username') ?></small>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input class="form-control<?php if(form_error('password')!=null){echo ' is-invalid';} ?>" type="password" name="password" placeholder="Masukkan Password Anda.." >
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        <small class="form-text text-danger"><?= form_error('password') ?></small>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary  mt-2" type="submit"> Masuk </button>
                                    </div>

                                <?php echo form_close() ?>

                                <div class="text-center d-grid mt-2">
                                    <a href="<?= base_url('Home')?>" class="btn btn-outline-primary waves-effect waves-light"> Batal </a>
                                </div>

                                <div class="col-12 text-center mt-3">
                                    <p class="text-center-50">Belum punya akun? <a href="<?= base_url('Auth/Signup')?>" class="text-primary ms-1"><b>Daftar</b></a></p>
                                </div> <!-- end col -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/app.min.js"></script>
        
    </body>
</html>