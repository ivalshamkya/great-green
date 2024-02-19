
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
                                            <h2>Ubah Konten</h2>
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
                                        echo form_open_multipart('Setting/Update_Tentang/'.$setting->kode);?>

                                            <div class="form-group">
                                                <label class="control-label">Konten<span style="color: red">*</span></label>
                                                <textarea rows="3" class="form-control<?php if(form_error('konten')!=null){echo ' is-invalid';} ?>" name="konten"><?= $setting->konten ?></textarea>
                                                <small class="form-text text-danger"><?= form_error('konten') ?></small>
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