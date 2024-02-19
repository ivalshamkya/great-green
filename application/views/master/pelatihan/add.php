
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Main content -->
                    <div class="main-content" id="panel">
                        <div class="container-fluid mt-3">

                            <div class="card">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                        <h2>Tambah Pelatihan</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('master_pelatihan') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>

                                <div class="card-body">
                                    <?php 
                                    //notifikasi gagal upload
                                    if (isset($error_upload)) {
                                        echo '
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        '.$error_upload.'</div>';   
                                    }
                                    
                                    echo form_open_multipart('master_pelatihan/add');?>

                                        <div class="form-group">
                                            <label class="control-label">Nama Pelatihan<span style="color: red">*</span></label>
                                            <input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" value="<?= set_value('nama') ?>" name="nama" maxlength="100" placeholder="Nama..">
                                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Tema<span style="color: red">*</span></label>
                                            <input type="text" class="form-control<?php if(form_error('tema')!=null){echo ' is-invalid';} ?>" value="<?= set_value('nama') ?>" name="tema" maxlength="150" placeholder="Tema..">
                                            <small class="form-text text-danger"><?= form_error('tema') ?></small>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Deskripsi<span style="color: red"></span></label>
                                            <textarea rows="3" class="form-control<?php if(form_error('deskripsi')!=null){echo ' is-invalid';} ?>" name="deskripsi"></textarea>
                                            <small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mentor<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('mentor')!=null){echo ' is-invalid';} ?>" value="<?= set_value('mentor') ?>" name="mentor" maxlength="200" placeholder="Mentor..">
                                                    <small class="form-text text-danger"><?= form_error('mentor') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tempat<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('tempat')!=null){echo ' is-invalid';} ?>" value="<?= set_value('nama') ?>" name="tempat" maxlength="100" placeholder="Tempat..">
                                                    <small class="form-text text-danger"><?= form_error('tempat') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tanggal<span style="color: red">*</span></label>
                                                    <input class="form-control<?php if(form_error('tanggal')!=null){echo ' is-invalid';} ?>" type="date" name="tanggal">
                                                    <small class="form-text text-danger"><?= form_error('tanggal') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Jam<span style="color: red">*</span></label>
                                                    <div class="input-group clockpicker<?php if(form_error('jam')!=null){echo ' is-invalid';} ?>" data-placement="top" data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" name="jam" maxlength="20" placeholder="Jam..">
                                                    </div>
                                                    <small class="form-text text-danger"><?= form_error('jam') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" id="preview_gambar">
                                        </div>

                                        <div class="col-lg-12 text-center mt-4 mb-4">
                                            <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" id="gambar_load" width="300px" height="300px">
                                        </div>

                                        <hr class="my-4" />
                                        <!-- Button -->
                                        <div class="col-md-12 d-grid text-center">
                                            <button type="submit" class="btn btn-primary mr--3"><i class="fa fa-save"></i>&nbsp; Tambah</button>
                                        </div>

                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Great Green <a href="#">x Politeknik Astra</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->