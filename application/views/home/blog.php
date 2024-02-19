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
                                        <div class="row">
                                            <h1>Blog Kami</h1>
                                            <p>Bangun kreativitas dengan sampah bekas agar menjadi barang yang berkualitas.</p><hr>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <?php foreach ($blog as $key => $value) { ?>
                            
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card mb-3">
                                            <div class="row g-0">                                               
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h3 class="sp-line-1" style="text-dark"><?= $value->judul ?></h3>
                                                        <p class="font-15 sp-line-2">
                                                            <?= substr($value->isi, 0, 350).'...'?>
                                                            <a href="<?= base_url('home/detailblog/'.$value->id); ?>">Baca Selengkapnya</a></a>                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <br>
                                                    <p class="text-muted font-14 mb-2">
                                                        <img src="<?php 
                                                            if($value->gambar == null){
                                                                echo base_url('assets/template/admin/images/app/avatar_default.svg');
                                                            } else {
                                                                echo base_url('assets/image/master/blog/'.$value->gambar);
                                                            }
                                                        ?>" height="200px" width="300px" />
                                                    </p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close() ?>   
                            </div>
                            <?php } ?>
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
