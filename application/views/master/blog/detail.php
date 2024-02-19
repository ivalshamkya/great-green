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
                                <h2>Detail Data Earth Hour</h2>
                            </div>
                            <div class="col-auto">
                                <div class="text-lg-end my-1 my-lg-0">
                                    <a href="<?php echo base_url('master_blog') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-8">
                        <div class="card d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="mt-2 mb-1 text-muted">Nama</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-account-outline font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->Nama ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="mt-2 mb-1 text-muted">Shop</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->Nama_Shop ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="mt-2 mb-1 text-muted">Area</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-email-outline font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->Area ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="mt-2 mb-1 text-muted">NPK</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->NPK ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="mt-2 mb-1 text-muted">Divisi</p>
                                        <div class="d-flex align-items-start">
                                            <div class="w-100">
                                                <?php foreach ($divisi as $key => $value) {
                                                    if ($value->Id_Divisi == $blog->Id_Divisi) echo '<span class="badge bg-primary">' . $value->Nama_Divisi . '</span>';
                                                } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="mt-2 mb-1 text-muted">Departemen</p>
                                        <div class="d-flex align-items-start">
                                            <div class="w-100">
                                                <?php foreach ($departemen as $key => $value) {
                                                    if ($value->Id_Departemen == $blog->Id_Departemen) echo '<span class="badge bg-warning">' . $value->Nama_Departemen . '</span>';
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mt-2 mb-1 text-muted">Energi Before</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->energi_before ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="mt-2 mb-1 text-muted">Energi After</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->energi_after ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mt-2 mb-1 text-muted">Total Tco₂</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->total_tco ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mt-2 mb-1 text-muted">Total Reduce Tco₂</p>
                                        <div class="d-flex align-items-start">
                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                            <div class="w-100">
                                                <h5 class="mt-1 font-size-14">
                                                    <?= $blog->total_reduce_tco ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="<?php

                                            if ($blog->gambar_before == null) {
                                                echo base_url('assets/image/master/all/Camera_Green.svg');
                                            } else {
                                                echo base_url('assets/image/master/blog/' . $blog->gambar_before);
                                            }

                                            ?>" id="gambar_load" width="300px" height="300px">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="<?php

                                            if ($blog->gambar_after == null) {
                                                echo base_url('assets/image/master/all/Camera_Green.svg');
                                            } else {
                                                echo base_url('assets/image/master/blog/' . $blog->gambar_after);
                                            }

                                            ?>" id="gambar_load" width="300px" height="300px">
                            </div>
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
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; Great Green <a href="#">x Politeknik Astra</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->