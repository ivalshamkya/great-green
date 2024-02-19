
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
                                            <h2>Setting Slider</h2>
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
                                <div class="col-4">
                                    <!-- slider 1 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- slider 1 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'slider_1') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Slider/slider_1') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Slider 1</h3>
                                            <hr>

                                            <div class="text-center">
                                                <img class="d-block img-fluid mt-4 mb-2" src="<?php echo base_url('assets/image/slider/'.$value->konten); ?>">
                                            </div>

                                            <?php }} ?>
                                            <!-- end slider 1 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                                
                                <div class="col-4">
                                    <!-- slider 2 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- slider 2 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'slider_2') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Slider/slider_2') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Slider 2</h3>
                                            <hr>

                                            <div class="text-center">
                                                <img class="d-block img-fluid mt-4 mb-2" src="<?php echo base_url('assets/image/slider/'.$value->konten); ?>">
                                            </div>

                                            <?php }} ?>
                                            <!-- end slider 1 dinamis -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->


                                <div class="col-4">
                                    <!-- slider 3 card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                                            <!-- slider 3 dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'slider_3') { 
                                            ?>

                                            <div class="float-end d-none d-md-inline-block">
                                                <a href="<?= base_url('Setting/Update_Slider/slider_3') ?>" class="btn btn-xs btn-success rounded-pill waves-effect waves-light">
                                                    <span class="btn-label"><i class="fa fa-pencil-alt"></i></span><b>Ubah</b>
                                                </a>
                                            </div>  
                                            
                                            <h3 class="header-title mb-2">Pengaturan Slider 3</h3>
                                            <hr>

                                            <div class="text-center">
                                                <img class="d-block img-fluid mt-4 mb-2" src="<?php echo base_url('assets/image/slider/'.$value->konten); ?>" width="350px">
                                            </div>

                                            <?php }} ?>
                                            <!-- end slider 1 dinamis -->
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