            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <!-- slider 1 dinamis -->
                        <?php 
                            foreach ($setting as $key => $value) {
                                if($value->kode == 'slider_1') { 
                        ?>
                        <img src="<?= base_url('/assets/image/slider/'.$value->konten); ?>" class="d-block img-fluid">
                        <?php }} ?>
                        <!-- end slider 1 dinamis -->

                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h2 class="text-white">GREATGREEN</h2>
                            <p>Cikarang, Kab. Bekasi</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <!-- slider 2 dinamis -->
                        <?php 
                            foreach ($setting as $key => $value) {
                                if($value->kode == 'slider_2') { 
                        ?>
                        <img src="<?= base_url('/assets/image/slider/'.$value->konten); ?>" class="d-block img-fluid">
                        <?php }} ?>
                        <!-- end slider 2 dinamis -->
                    
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h2 class="text-white">GREATGREEN</h2>
                            <p>Cikarang, Kab. Bekasi</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <!-- slider 3 dinamis -->
                        <?php 
                            foreach ($setting as $key => $value) {
                                if($value->kode == 'slider_3') { 
                        ?>
                        <img src="<?= base_url('/assets/image/slider/'.$value->konten); ?>" class="d-block img-fluid">
                        <?php }} ?>
                        <!-- end slider 3 dinamis -->
                    
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h2 class="text-white">GREATGREEN</h2>
                            <p>Cikarang, Kab. Bekasi</p>
                        </div> -->
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
           

            <div class="container mt-4">

                    
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
