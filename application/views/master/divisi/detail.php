
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
                                        <h2>Detail Cabang</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('master_cabang') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8 col-lg-7">
                                    <!-- project card -->
                                    <div class="card d-block">
                                        <div class="card-body">
                            
                                            <!-- end form-check-->
                                            <h3><?= $cabang->nama ?></h3>
                            
                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <!-- assignee -->
                                                    <p class="mt-2 mb-1 text-muted">PIC</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-account-outline font-18 text-success me-1"></i>
                                                        <h5 class="mt-1 font-size-14">
                                                            <?= $cabang->pic ?>
                                                        </h5>
                                                    </div>
                                                    <!-- end assignee -->
                                                </div>
                                                <!-- end col -->
                            
                                                <div class="col-md-6">
                                                    <!-- start due date -->
                                                    <p class="mt-2 mb-1 text-muted">Kontak</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-contacts-outline font-18 text-success me-1"></i>
                                                        <div class="w-100">
                                                            <h5 class="mt-1 font-size-14">
                                                                <?= $cabang->kontak ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end due date -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <!-- assignee -->
                                                    <p class="mt-2 mb-1 text-muted">Latitude</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-latitude font-18 text-success me-1"></i>
                                                        <h5 class="mt-1 font-size-14">
                                                            <?php 
                                                                if ($cabang->latitude == null) {
                                                                    echo '-';
                                                                } else {
                                                                    echo $cabang->latitude;
                                                                }    
                                                            ?>
                                                        </h5>
                                                    </div>
                                                    <!-- end assignee -->
                                                </div>
                                                <!-- end col -->
                                                                
                                            <!-- Longitude-->
                                            <input type="hidden" id="latitude" class="form-control mb-3" name="latitude" placeholder="latitude" value="<?= $cabang->latitude ?>">                                            
                                            <!-- Longitude-->
                                            <input type="hidden" id="longitude" class="form-control mb-3" name="longitude" placeholder="longitude" value="<?= $cabang->longitude ?>">


                                                <div class="col-md-6">
                                                    <!-- start due date -->
                                                    <p class="mt-2 mb-1 text-muted">Longitude</p>
                                                    <div class="d-flex align-items-start">
                                                        <i class="mdi mdi-longitude font-18 text-success me-1"></i>
                                                        <div class="w-100">
                                                            <h5 class="mt-1 font-size-14">
                                                                <?php 
                                                                    if ($cabang->longitude == null) {
                                                                        echo '-';
                                                                    } else {
                                                                        echo $cabang->longitude;
                                                                    }    
                                                                ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end due date -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                            
                                            <h5 class="mt-3">Alamat</h5>
                            
                                            <p class="text-muted mb-2">
                                                <?= $cabang->alamat ?>
                                            </p>
                            
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card-->
                            
                                </div>
                                <!-- end col -->
                            
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card">
                                        <div class="card-body text-center">
                                        <div id="map" style="width: auto; height: 400px;"></div> 
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

<script>


var lat = document.getElementById('latitude').value;
var lng = document.getElementById('longitude').value;
const map = L.map('map').setView([lat,lng], 15 );

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);



var latInput = document.querySelector("[name=latitude]");
var lngInput = document.querySelector("[name=longitude]");

var curLocation = [lat,lng];

map.attributionControl.setPrefix(false);

var marker = new L.marker(curLocation, {
    draggable:'true',
});

marker.on('dragend',function(event){
    var position = marker.getLatLng();
    marker.setLatLng(position,{
        draggable:'true',
    }).bindPopup(position).update();
    $("#latitude").val(position.lat);
    $("#longitude").val(position.lng);
});
map.addLayer(marker);

</script>
