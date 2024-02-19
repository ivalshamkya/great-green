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
                                            <h1>Cabang</h1>
                                            <p>Lokasi cabang kami yang tersebar di seluruh Indonesia.</p>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mt-0">
                                            <div id="map" style="height: 500px;"></div>      
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <?php 
                                    foreach ($cab as $key => $value) {
                                ?>

                                <div class="card">
                                    <div class="card-body">
                                        <!-- Title-->
                                        <h3 class="mt-0 text-dark"><?= $value->nama ?></h3>
                                        <p class="text-dark text-uppercase"><i class="text-primary mdi mdi-account-circle"></i> <small><?= $value->pic ?></small></p>
                                        <!-- Desc-->
                                        <p class="text-muted font-13 mb-2 sp-line-2"><?= $value->alamat ?></p>
                                        <!-- Task info-->
                                        <p class="mb-1">
                                            <span class="pe-2 text-nowrap mb-0 d-inline-block text-primary">
                                                <i class="mdi mdi-phone text-primary"></i>
                                                <b><?= $value->kontak ?></b>
                                            </span>
                                            <!-- <span class="text-nowrap mb-0 d-inline-block text-primary">
                                                <i class="mdi mdi-email-outline text-primary"></i>
                                                <b>greatgreen@gmail.com</b>
                                            </span> -->
                                        </p>
                                    </div>
                                </div> <!-- end card -->

                                <?php } ?>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->



            <script>
                const map = L.map('map').setView([-6.264451,106.895859], 11 );

                const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                <?php foreach ($cab as $key => $value) {?>
                    L.marker([<?= $value->latitude ?> , <?= $value->longitude ?>]).bindPopup("<b>Cabang</b> : <?= $value->nama ?><br><b>PIC</b> : <?= $value->pic?><br><b>Telp</b> :  <?= $value->kontak ?>").addTo(map);
                <?php } ?>
            </script>