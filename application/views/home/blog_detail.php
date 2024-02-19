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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/blog') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Detail Blog</h4>
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
                                                        if($blog->gambar == null){
                                                            echo base_url('assets/template/admin/images/app/avatar_default.svg');
                                                        } else {
                                                            echo base_url('assets/image/master/blog/'.$blog->gambar);
                                                        }
                                                    ?>
                                                    " width="300px" height="300px" class="mx-auto d-block rounded">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-7 mt-2">
                                            <div class="ps-xl-3 mt-5 mt-xl-0">
                                                <h3 class="mb-2"><?= $blog->judul ?></h3>
                                               
                                                <p class="text-muted mb-4">
                                                    <?php 
                                                        if ( $blog->isi == null) {
                                                            echo '-';
                                                        } else {
                                                            echo  $blog->isi;
                                                        }    
                                                    ?>
                                                </p>

                                                <?php form_close() ?>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->
                    
                </div> <!-- container -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

