
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
                                            <h2>Setting Footer</h2>
                                        </div>
                                    </div> <!-- end row -->
                                </div>
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


                            <div class="row">
                                <div class="col-12">
                                    <!-- deskripsi card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- deskripsi dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'deskripsi') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Footer/deskripsi') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Deskripsi</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-muted"> <?= $value->konten ?></p>
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>

                                            <?php }} ?>
                                            <!-- end deskripsi dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->
                            </div>                        
                            <!-- end row -->


                            <div class="row">
                                <div class="col-6">
                                    <!-- telepon card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- telepon dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'telepon') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Footer/telepon') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Telepon</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                            </div>

                                            <?php }} ?>
                                            <!-- end telepon dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-6">
                                    <!-- email card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- email dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'email') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Footer/email') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Email</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <h5 class="mt-3 text-black"><?= $value->konten ?></h5>
                                            </div>

                                            <?php }} ?>
                                            <!-- end email dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->
                                
                            </div>                        
                            <!-- end row -->


                            <div class="row">
                                <div class="col-12">
                                    <!-- deskripsi card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- deskripsi dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'alamat_laporan') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Footer/alamat_laporan') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Alamat Laporan</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <div class="col-1">
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-muted"> <?= $value->konten ?></p>
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>

                                            <?php }} ?>
                                            <!-- end deskripsi dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->
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