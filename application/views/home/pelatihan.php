<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<br/><br/>
<div class="container mt-5">

        <!-- Start Content-->
        <div class="container-fluid mt-5">
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="mb-1">Pelatihan</h1>
                            <p>Wujud kepedulian kami dalam mengembangkan keterampilan bagi keberlangsungan lingkungan.</p><hr>
                        </div>
                    </div> <!-- end card -->

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

                </div> <!-- end col-->
            </div>
            <!-- end row-->
            
            <div class="row">
                
                <?php 
                
                foreach ($pelatihan as $key => $value) { 
                    //menampilkan hanya pelatihan yang tanggalnya belum terlewat saja
                    if ($value->tanggal >= date('Y-m-d')) {
                ?>
                 
                <div class="col-lg-4">
                    <div class="card project-box">
                        <div class="card-body">
                            <img src="<?php 
                                if($value->gambar == null){
                                    echo base_url('assets/image/master/all/Camera_Green.svg');
                                } else {
                                    echo base_url('assets/image/master/pelatihan/'.$value->gambar);
                                }
                            ?>" alt="image" class="rounded-circle mb-3" height="100" width="100"/>

                            <!-- Title-->
                            <h4 class="mt-0"><a href="project-detail.html" class="text-dark"><?= $value->nama ?></a></h4>
                            <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>By <?= $value->mentor ?></small></p>
                
                            <div class="badge bg-soft-success text-success mb-3">Dibuka</div>
                            <p class="text-primary text-uppercase sp-line-1"><b><?= $value->tema ?></b></p>
                            <!-- Desc-->
                            <p class="text-muted font-13 mb-3 sp-line-2"><?= $value->deskripsi ?></p>
                            <!-- <a href="javascript:void(0);" class="fw-bold text-muted mb-3">Selengkapnya</a> -->
                            <!-- Task info-->
                            <p class="mb-0 mt-2">
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-calendar-clock text-primary"></i>
                                    <b><?= $value->jam ?></b>
                                </span>
                                <span class="text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-calendar-month-outline text-primary"></i>
                                    <b><?= $value->tanggal ?></b>
                                </span>
                            </p>

                            <p class="mb-1 mt-0">
                                <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                    <i class="mdi mdi-map-marker text-primary"></i>
                                    <b><?= $value->tempat ?></b>
                                </span>
                            </p>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-8 d-grid">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mod_pel<?= $value->id ?>">Daftar Pelatihan</button>
                                    </div>
                                    <div class="col-lg-4 d-grid">
                                        <a class="btn btn-info" href="<?= base_url('Pendaftaran_Pelatihan/Detail/'.$value->id); ?>"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- end card box-->

                </div><!-- end col-->
                <?php } } ?>
            </div>
            <!-- end row-->


            <!-- MODAL -->
            <!-- modal pendaftaran pelatihan -->
            <?php foreach ($pelatihan as $key => $value) { ?>
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
    </div> <!-- content -->

</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->