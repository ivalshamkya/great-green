
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
                    <div class="col-xl-9">
                        <div class="card bg-pattern">

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
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="p-sm-3">
                                            <h4 class="mt-3 mt-lg-0">Daftar Baru</h4>
                                            <p class="text-muted mb-0 mb-3">Masukkan data lengkap Anda untuk bergabung bersama kami di Great Green.</p>

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

                                            <?php echo form_open_multipart('Auth/signup_add') ?>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Username<span style="color: red">*</span></label>
                                                            <input type="text" class="form-control<?php if(form_error('username')!=null){echo ' is-invalid';} ?>" value="<?= set_value('username') ?>" name="username" maxlength="100" placeholder="Username..">
                                                            <small class="form-text text-danger"><?= form_error('username') ?></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Password<span style="color: red">*</span></label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" class="form-control<?php if(form_error('password')!=null){echo ' is-invalid';} ?>" value="<?= set_value('password') ?>" name="password" maxlength="50" placeholder="Password..">
                                                                <div class="input-group-text" data-password="false">
                                                                    <span class="password-eye"></span>
                                                                </div>
                                                            </div>
                                                            <small class="form-text text-danger"><?= form_error('password') ?></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label class="control-label">Nama Lengkap<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" value="<?= set_value('nama') ?>" name="nama" maxlength="100" placeholder="Nama..">
                                                    <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Divisi<span style="color: red">*</span></label>
                                                            <select class="form-select<?php if(form_error('Id_Divisi')!=null){echo ' is-invalid';} ?>" name="Id_Divisi">
                                                                <option disabled selected>Pilih Divisi</option>
                                                                <?php foreach ($divisi as $key => $value) { ?>
                                                                    <option value="<?= $value->Id_Divisi ?>"><?= $value->Nama_Divisi ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <small class="form-text text-danger"><?= form_error('Id_Divisi') ?></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Departemen<span style="color: red">*</span></label>
                                                            <select class="form-select<?php if(form_error('Id_Departemen')!=null){echo ' is-invalid';} ?>" name="Id_Departemen">
                                                                <option disabled selected>Pilih Departemen</option>
                                                                <?php foreach ($departemen as $key => $value) { ?>
                                                                    <option value="<?= $value->Id_Departemen ?>"><?= $value->Nama_Departemen ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <small class="form-text text-danger"><?= form_error('Id_Departemen') ?></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label">NPK<span style="color: red">*</span></label>
                                                            <input type="number" class="form-control<?php if(form_error('No_NPK')!=null){echo ' is-invalid';} ?>" value="<?= set_value('No_NPK') ?>" name="No_NPK" placeholder="No NPK..">
                                                            <small class="form-text text-danger"><?= form_error('No_NPK') ?></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Email<span style="color: red">*</span></label>
                                                            <input type="text" class="form-control<?php if(form_error('email')!=null){echo ' is-invalid';} ?>" value="<?= set_value('email') ?>" name="email" maxlength="100" placeholder="Email..">
                                                            <small class="form-text text-danger"><?= form_error('email') ?></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label class="control-label">Foto</label>
                                                    <input type="file" name="foto_profil" class="form-control mb-3" id="preview_gambar">
                                                </div>

                                                <div class="col-lg-12 text-center mt-4 mb-4">
                                                    <img src="<?= base_url('assets/image/master/all/Profile_Green.svg')?>" id="gambar_load" width="300px" height="300px">
                                                </div>

                                                <div class="mt-4 mb-0">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit"> Daftar </button>
                                                    <a href="<?= base_url('auth')?>" class="btn btn-outline-primary w-100 waves-effect waves-light mt-2"> Sudah Punya Akun </a>
                                                </div>
                                            
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-3">
                                    <p class="text-center-50">UMKM <a href="<?= base_url('home')?>" class="text-primary ms-1"><b>Great Green</b></a></p>
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

        <script>
            // untuk cek/preview gambar
            function bacaGambar(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#gambar_load').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#preview_gambar").change(function(){
                bacaGambar(this);
            });
        </script>
        
    </body>
</html>