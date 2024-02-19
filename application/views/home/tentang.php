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
                                            <h1>Tentang Kami</h1>
                                            <p>Mengenal lebih dekat GreatGreen, UMKM yang bergerak di bidang lingkungan.</p><hr>
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
                                        <div class="text-center">
                                            <!-- logo dinamis -->
                                            <?php 
                                                foreach ($setting as $key => $value) {
                                                    if($value->kode == 'logo') { 
                                            ?>

                                            <img class="mt-4 mb-2" src="<?php echo base_url('assets/image/master/all/'.$value->konten); ?>" width="700px">
                                            
                                            <?php }} ?>
                                            <!-- end logo dinamis -->

                                            <h3 class="mt-4">Selamat datang di GreatGreen!</h3>

                                            <div class="row">
                                                <div class="col-1">
                                                </div>

                                                <!-- tentang dinamis -->
                                                <?php 
                                                    foreach ($setting as $key => $value) {
                                                        if($value->kode == 'tentang') { 
                                                ?>

                                                <div class="col-10">
                                                    <p class="text-muted"> <?= $value->konten ?></p>
                                                </div>
                                                
                                                <?php }} ?>
                                                <!-- end tentang dinamis -->

                                                <div class="col-1">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <div class="text-center mt-3 ps-1 pe-1">
                                                        <!-- icon 1 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'icon_1') { 
                                                        ?>
                                                        <div class="avatar-md rounded-circle bg-primary mx-auto">
                                                            <i class="<?= $value->konten ?> font-24 avatar-title"></i>
                                                        </div>
                                                        <?php }} ?>
                                                        <!-- end icon 1 dinamis -->

                                                        <!-- judul 1 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'judul_1') { 
                                                        ?>
                                                        <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                                        <?php }} ?>
                                                        <!-- end judul 1 dinamis -->

                                                        <!-- isi 1 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'isi_1') { 
                                                        ?>
                                                        <p class="text-muted"><?= $value->konten ?></p>
                                                        <?php }} ?>
                                                        <!-- end isi 1 dinamis -->
                                                    </div>
                                                </div> <!-- end col-->

                                                <div class="col-md-4">
                                                    <div class="text-center mt-3 ps-1 pe-1">
                                                        <!-- icon 2 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'icon_2') { 
                                                        ?>
                                                        <div class="avatar-md rounded-circle bg-primary mx-auto">
                                                            <i class="<?= $value->konten ?> font-24 avatar-title"></i>
                                                        </div>
                                                        <?php }} ?>
                                                        <!-- end icon 2 dinamis -->

                                                        <!-- judul 2 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'judul_2') { 
                                                        ?>
                                                        <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                                        <?php }} ?>
                                                        <!-- end judul 2 dinamis -->

                                                        <!-- isi 2 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'isi_2') { 
                                                        ?>
                                                        <p class="text-muted"><?= $value->konten ?></p>
                                                        <?php }} ?>
                                                        <!-- end isi 2 dinamis -->
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-4">
                                                    <div class="text-center mt-3 ps-1 pe-1">
                                                        <!-- icon 3 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'icon_3') { 
                                                        ?>
                                                        <div class="avatar-md rounded-circle bg-primary mx-auto">
                                                            <i class="<?= $value->konten ?> font-24 avatar-title"></i>
                                                        </div>
                                                        <?php }} ?>
                                                        <!-- end icon 3 dinamis -->

                                                        <!-- judul 3 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'judul_3') { 
                                                        ?>
                                                        <h5 class="text-uppercase mt-3 text-black"><?= $value->konten ?></h5>
                                                        <?php }} ?>
                                                        <!-- end judul 3 dinamis -->

                                                        <!-- isi 3 dinamis -->
                                                        <?php 
                                                            foreach ($setting as $key => $value) {
                                                                if($value->kode == 'isi_3') { 
                                                        ?>
                                                        <p class="text-muted"><?= $value->konten ?></p>
                                                        <?php }} ?>
                                                        <!-- end isi 3 dinamis -->
                                                    </div>
                                                </div> <!-- end col-->
                                            </div> <!-- end row-->

                                            <div class="row mt-5">
                                                <div id="map" style="height: 500px;"></div>      
                                            </div>

                                        </div> <!-- end /.text-center-->
                                        </div>
                                    </div>
                                </div> <!-- end card -->
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