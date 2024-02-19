            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
           

            <div class="container mt-5">

                <!-- Start Content-->
                <div class="container-fluid mt-5">
                        
                    <!-- start page title -->
                    <div class="row ">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('Home/Pelatihan') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Detail Pelatihan</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">

                                            <div class="tab-content pt-0">
                                                <div class="tab-pane active show" id="product-1-item">
                                                    <img src="

                                                    <?php 
                                                        if($pelatihan->gambar == null){
                                                            echo base_url('assets/image/master/all/Camera_Green.svg');
                                                        } else {
                                                            echo base_url('assets/image/master/pelatihan/'.$pelatihan->gambar);
                                                        }
                                                    ?>

                                                    " width="350px" height="350px" class="mx-auto d-block rounded">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-8 mt-2">
                                            <div class="ps-xl-3 mt-5 mt-xl-0">
                                                <p>
                                                    <?php 
                                                        if ( $pelatihan->buka_tutup == 0) {
                                                            echo '<span class="badge bg-soft-danger text-success mb-0">
                                                            Maaf pelatihan sudah ditutup
                                                            </span>';
                                                        } else {
                                                            echo '<span class="badge bg-soft-success text-success mb-0">
                                                            Pelatihan masih dibuka
                                                            </span>';
                                                        }    
                                                    ?>
                                                </p>
                                                <h3 class="mb-2"><?= $pelatihan->nama ?></h3>
                                                <p class="mb-2">Mentor by <span class="text-primary"><b><?= strtoupper($pelatihan->mentor) ?></b></span></p>

                                                <h5 class="mt-3">Deskripsi</h5>
                                                <p class="text-muted mb-0">
                                                <?php 
                                                        if ( $pelatihan->deskripsi == null) {
                                                            echo '-';
                                                        } else {
                                                            echo  $pelatihan->deskripsi;
                                                        }    
                                                    ?>
                                                </p>

                                                <h5 class="mt-3">Pelaksanaan</h5>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-0 mb-1 text-muted">Tempat</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-map-marker font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pelatihan->tempat ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-md-4">
                                                        <!-- assignee -->
                                                        <p class="mt-0 mb-1 text-muted">Tanggal</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-calendar-month-outline font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pelatihan->tanggal ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div>
                                                    <!-- end col -->
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-0 mb-1 text-muted">Jam</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-calendar-clock font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pelatihan->jam ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                
                                                    
                                                </div>
                                                <!-- end row -->

                                                <div class="row mt-2">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#mod_pel<?= $pelatihan->id ?>">
                                                            <span class="btn-label"><i class="mdi mdi-human-greeting"></i></span>Daftar Pelatihan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <!-- MODAL -->
                    <!-- modal pendaftaran pelatihan -->
                    <?php foreach ($list_pelatihan as $key => $value) { ?>
                        <div id="mod_pel<?= $value->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <?php 
                                        echo form_open('Pendaftaran_Pelatihan/Daftar');
                                        $kode_pendaftaran = date('Ymd').$value->id.strtoupper(random_string('alnum',10)) ;
                                    ?>

                                    <div class="modal-header">
                                        <h4 class="modal-title" id="standard-modalLabel">Konfirmasi</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Yakin ingin daftar pelatihan?</h3>
                                        <p>Silahkan konfirmasi ya, jika ingin daftar.</p>
                                    </div>

                                    <input hidden name="kode_pendaftaran" value="<?= $kode_pendaftaran ?>">
                                    <input hidden name="id_pelatihan" value="<?= $value->id ?>">

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="fa fa-ban">&nbsp;</i>Batal</button>
                                        <!-- <a href="<?= base_url('Pendaftaran_Pelatihan/Daftar/'.$value->id) ?>" class="btn btn-primary"><i class="fa fa-check">&nbsp;</i>Ya, Daftar</a> -->
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;</i>Ya, Daftar</button>
                                    </div>

                                    <?php echo form_close() ?>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    <?php } ?>
                    
                </div> <!-- container -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

