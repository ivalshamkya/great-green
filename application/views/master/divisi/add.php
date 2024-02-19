
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
                                        <h2>Tambah Divisi</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('master_divisi') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>

                                <div class="card-body">
                                    <?php 
                                    echo form_open_multipart('master_divisi/add');?>

                                        <div class="form-group">
                                            <label class="control-label">Nama Divisi<span style="color: red">*</span></label>
                                            <input type="text" class="form-control<?php if(form_error('Nama_Divisi')!=null){echo ' is-invalid';} ?>" value="<?= set_value('Nama_Divisi') ?>" name="Nama_Divisi" maxlength="100" placeholder="Nama Divisi..">
                                            <small class="form-text text-danger"><?= form_error('Nama_Divisi') ?></small>
                                        </div>

                                        <hr class="my-4" />
                                        <!-- Button -->
                                        <div class="col-md-12 d-grid text-center">
                                            <button type="submit" class="btn btn-primary mr--3"><i class="fa fa-save"></i>&nbsp; Tambah</button>
                                        </div>
                                        
                                    <?php echo form_close() ?>
                                </div>
                            </div>
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

	var map = L.map('map');
    map.setView([-6.3239686,106.813994], 13 ); 

	 L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);



    // getLocation();
    // function getLocation(){
    //     if(navigator.geolocation){
    //         navigator.geolocation.getCurrentPosition(showPosition);
    //     }else {
    //         x.innerHTML = "Geolocation is not supported by this browser.";
    //     }
    // }

    // function showPosition(position) {
    //     $("[name=latitude]").val(position.coords.latitude);
    //     $("[name=longitude]").val(position.coords.longitude);
    // }

    

    //Geolocation
    navigator.geolocation.watchPosition(succes,error);

    
    function succes(pos) {

        var latInput = document.querySelector("[name=latitude]");
        var lngInput = document.querySelector("[name=longitude]");


        const lt = pos.coords.latitude;
        const lg = pos.coords.longitude;
        map.setView([lt,lg],15);
        
        
        var curlocation = ([lt,lg]);

        var marker = new L.marker(curlocation, {
            draggable : 'true'
        });

        
        map.on("click", function(e){
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            if(!marker){
                marker = L.marker (e.latlng).addTo(map);
            }else{
                map.addLayer(marker);
                marker.setLatLng(e.latlng);
            }
            latInput.value = lat;
            lngInput.value = lng;
        });
        
    }
    
    function error(err){
        
        if(err.code ===1){
            alert("Please allow geolocation access");
        }else{
            alert("Cannot get current location");
        }
    }
    // Get Coordinat Location
</script>