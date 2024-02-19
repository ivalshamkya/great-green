
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
                                        <h2>Ubah Divisi</h2>
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
                                    echo form_open_multipart('master_divisi/update/'.$divisi->Id_Divisi);?>

                                            <div class="form-group">
                                                <label class="control-label">Nama Divisi<span style="color: red">*</span></label>
                                                <input type="text" class="form-control<?php if(form_error('Nama_Divisi')!=null){echo ' is-invalid';} ?>"name="Nama_Divisi" maxlength="100" placeholder="Nama Divisi.." value="<?= $divisi->Nama_Divisi ?>">
                                                <small class="form-text text-danger"><?= form_error('Nama_Divisi') ?></small>
                                            </div>

                                        <hr class="my-4" />
                                        <!-- Button -->
                                        <div class="col-md-12 d-grid text-center">
                                            <button type="submit" class="btn btn-primary mr--3"><i class="fa fa-save"></i>&nbsp; Ubah</button>
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


    var lat = document.getElementById('latitude').value;
    var lng = document.getElementById('longitude').value;
	const map = L.map('map').setView([lat,lng], 15 );

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

    // var marker = L.marker([-6.3488576,107.1472677]).bindPopup("<b>Cabang 1<b>").addTo(map).openPopup();

    //Get Coordinat Location

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


    map.on("click", function(e){
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if(!marker){
            marker = L.marker(e.latlng).addTo(map);
        }else{
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    });
</script>