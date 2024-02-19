
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
                                            <h2>Setting Tentang</h2>
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
                                    <!-- logo card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- logo dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'logo') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Logo/logo') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Logo</h3>
                                            <hr>

                                            <div class="text-center">
                                                <img class="mt-4 mb-2" src="<?php echo base_url('assets/image/master/all/'.$value->konten); ?>" width="700px">
                                            </div>

                                            <?php }} ?>
                                            <!-- end logo dinamis -->
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
                                    <!-- tentang card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- tentang dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'tentang') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/tentang') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Tentang</h3>
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
                                            <!-- end tentang dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->
                            </div>                        
                            <!-- end row -->


                            <div class="row">
                                <div class="col-4">
                                    <!-- icon_1 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- icon_1 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'icon_1') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/icon_1') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Icon 1</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <div class="avatar-md rounded-circle bg-primary mx-auto">
                                                    <i class="<?= $value->konten ?> font-24 avatar-title"></i>
                                                </div>
                                            </div>

                                            <?php }} ?>
                                            <!-- end icon_1 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-4">
                                    <!-- icon_2 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- icon_2 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'icon_2') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/icon_2') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Icon 2</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <div class="avatar-md rounded-circle bg-primary mx-auto">
                                                    <i class="<?= $value->konten ?> font-24 avatar-title"></i>
                                                </div>
                                            </div>

                                            <?php }} ?>
                                            <!-- end icon_2 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-4">
                                    <!-- icon_3 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- icon_3 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'icon_3') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/icon_3') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Icon 3</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <div class="avatar-md rounded-circle bg-primary mx-auto">
                                                    <i class="<?= $value->konten ?> font-24 avatar-title"></i>
                                                </div>
                                            </div>

                                            <?php }} ?>
                                            <!-- end icon_3 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->
                            </div>                        
                            <!-- end row -->

                            <div class="row">
                                <div class="col-4">
                                    <!-- judul_1 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- judul_1 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'judul_1') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/judul_1') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Judul 1</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                            </div>

                                            <?php }} ?>
                                            <!-- end judul_1 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-4">
                                    <!-- judul_2 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- judul_2 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'judul_2') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/judul_2') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Judul 2</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                            </div>

                                            <?php }} ?>
                                            <!-- end judul_2 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-4">
                                    <!-- judul_3 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- judul_3 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'judul_3') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/judul_3') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Judul 3</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                            </div>

                                            <?php }} ?>
                                            <!-- end judul_3 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->
                                
                            </div>                        
                            <!-- end row -->


                            <div class="row">
                                <div class="col-4">
                                    <!-- isi_1 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- isi_1 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'isi_1') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/isi_1') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Isi 1</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <p class="text-muted"><?= $value->konten ?></p>
                                            </div>

                                            <?php }} ?>
                                            <!-- end isi_1 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-4">
                                    <!-- isi_2 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- isi_2 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'isi_2') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/isi_2') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Isi 2</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <p class="text-muted"><?= $value->konten ?></p>
                                            </div>

                                            <?php }} ?>
                                            <!-- end isi_2 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                <div class="col-4">
                                    <!-- isi_3 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- isi_3 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'isi_3') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Tentang/isi_3') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Isi 3</h3>
                                            <hr>

                                            <div class="row text-center">
                                                <p class="text-muted"><?= $value->konten ?></p>
                                            </div>

                                            <?php }} ?>
                                            <!-- end isi_3 dinamis -->
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