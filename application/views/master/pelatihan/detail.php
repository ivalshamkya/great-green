
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
                                        <h2>Detail Pelatihan</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('master_pelatihan') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8 col-lg-7">
                                    <!-- project card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                            
                                            <!-- end form-check-->
                                            <h3><?= $pelatihan->nama ?></h3>

                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <!-- assignee -->
                                                    <p class="mt-2 mb-1 text-muted">Tempat</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-map-marker font-18 text-success me-1"></i>
                                                        <div class="w-100">
                                                            <h5 class="mt-1 font-size-14">
                                                                <?= $pelatihan->tempat ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end assignee -->
                                                </div>
                                                <!-- end col -->
                            
                                                <div class="col-md-4">
                                                    <!-- start due date -->
                                                    <p class="mt-2 mb-1 text-muted">Tanggal Pelaksanaan</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-calendar-month-outline font-18 text-success me-1"></i>
                                                        <div class="w-100">
                                                            <h5 class="mt-1 font-size-14">
                                                                <?= $pelatihan->tanggal ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end due date -->
                                                </div>
                            
                                                <div class="col-md-4">
                                                    <!-- start due date -->
                                                    <p class="mt-2 mb-1 text-muted">Jam</p>
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
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!-- assignee -->
                                                    <p class="mt-2 mb-1 text-muted">Buka Tutup</p>
                                                    <div class="d-flex align-items-start">
                                                        <div class="w-100">
                                                            <?php if ($pelatihan->buka_tutup == 1) {echo '<span class="badge bg-primary">Dibuka</span>';} ?>
                                                            <?php if ($pelatihan->buka_tutup == 0) {echo '<span class="badge bg-danger">Ditutup</span>';} ?>
                                                        </div>
                                                    </div>
                                                    <!-- end assignee -->
                                                </div>
                                                <!-- end col -->
                            
                                                <div class="col-md-8">
                                                    <!-- start due date -->
                                                    <p class="mt-2 mb-1 text-muted">Mentor</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-account-tie font-18 text-success me-1"></i>
                                                        <div class="w-100">
                                                            <h5 class="mt-1 font-size-14">
                                                                <?= $pelatihan->mentor ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end due date -->
                                                </div>
                            
                                               
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <h5 class="mt-3">Tema</h5>
                                            <p class="text-muted mb-2">
                                                <?= $pelatihan->tema ?>
                                            </p>
                            
                                            <h5 class="mt-3">Deskripsi</h5>
                                            <p class="text-muted mb-2">
                                                <?php 
                                                    if ( $pelatihan->deskripsi == null) {
                                                        echo '-';
                                                    } else {
                                                        echo  $pelatihan->deskripsi;
                                                    }    
                                                ?>
                                            </p>
                            
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                            
                                </div>
                                <!-- end col -->
                            
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img src="<?php 

                                            if ($pelatihan->gambar == null){
                                                echo base_url('assets/image/master/all/Camera_Green.svg');
                                            } else {
                                                echo base_url('assets/image/master/pelatihan/'.$pelatihan->gambar);
                                            }
                                            
                                            ?>" id="gambar_load" width="300px" height="300px">
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <!-- end row -->
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