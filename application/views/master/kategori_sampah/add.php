
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
                                        <h2>Tambah Kategori Sampah</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('master_kategori_sampah') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>

                                <div class="card-body">
                                    <?php 
                                    echo form_open_multipart('master_kategori_sampah/add');?>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" value="<?= set_value('nama') ?>" name="nama" placeholder="Nama..">
                                                    <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Harga<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control<?php if(form_error('harga')!=null){echo ' is-invalid';} ?>" value="<?= set_value('harga') ?>" name="harga" placeholder="Harga..">
                                                    <small class="form-text text-danger"><?= form_error('harga') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Deskripsi<span style="color: red">*</span></label>
                                            <textarea rows="3" class="form-control<?php if(form_error('deskripsi')!=null){echo ' is-invalid';} ?>" name="deskripsi"></textarea>
                                            <small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
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