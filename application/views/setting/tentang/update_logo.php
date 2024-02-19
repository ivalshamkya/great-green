
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
                                        <h2>Ubah Logo</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('Setting/Tentang') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>

                                <div class="card-body">
                                    <?php 
                                    //notifikasi validasi
                                    echo validation_errors('
                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>', 
                                    '</div>');

                                    //notifikasi gagal upload
                                    if (isset($error_upload)) {
                                        echo '
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        '.$error_upload.'</div>';   
                                    }
                                    
                                    echo form_open_multipart('Setting/Update_Logo/'.$setting->kode);?>

                                        <div class="form-group">
                                            <label class="control-label">Logo</label>
                                            <input type="file" name="konten" class="form-control mb-3" id="preview_gambar">
                                        </div>

                                        <div class="col-lg-12 text-center mt-4 mb-4">
                                            <?php if ($setting->konten == null){ ?>
                                                <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" id="gambar_load" width="300px" height="300px">
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/image/master/all/'.$setting->konten)?>" id="gambar_load" width="300px" height="300px">
                                            <?php } ?>
                                        </div>

                                        <hr class="my-4" />
                                        <!-- Button -->
                                        <div class="col-md-12 d-grid text-center">
                                            <button type="submit" class="btn btn-primary mr--3"><i class="fa fa-save"></i>&nbsp; Ubah</button>
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