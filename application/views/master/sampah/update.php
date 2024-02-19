
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
                                            <h2>Ubah Data</h2>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-lg-end my-1 my-lg-0">
                                                    <a href="<?php echo base_url('Master_sampah') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                                </div>
                                            </div><!-- end col-->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="card-body">
                                        <?php 
                                        echo form_open_multipart('Master_sampah/update/'.$sampah->id);?>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama PIC<span style="color: red">*</span></label>
                                                        <input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" name="nama" maxlength="100" placeholder="Nama.." value="<?= $sampah->nama ?>">
                                                        <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NPK<span style="color: red">*</span></label>
                                                        <input type="number" class="form-control<?php if(form_error('NPK')!=null){echo ' is-invalid';} ?>" name="NPK" placeholder="NPK.." value="<?= $sampah->NPK ?>">
                                                        <small class="form-text text-danger"><?= form_error('NPK') ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Area<span style="color: red">*</span></label>
                                                        <input type="text" class="form-control<?php if(form_error('area')!=null){echo ' is-invalid';} ?>" value="<?= $sampah->area ?>" name="area" maxlength="100" placeholder="Nama Area..">
                                                        <small class="form-text text-danger"><?= form_error('area') ?></small>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Section<span style="color: red">*</span></label>
                                                        <input type="text" class="form-control<?php if(form_error('seksi')!=null){echo ' is-invalid';} ?>" value="<?= $sampah->seksi ?>" name="seksi" maxlength="100" placeholder="Nama Seksi..">
                                                        <small class="form-text text-danger"><?= form_error('seksi') ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Division<span style="color: red">*</span></label>
                                                        <select class="form-select <?php if(form_error('Id_Divisi')!=null){echo ' is-invalid';} ?>" name="Id_Divisi">
                                                            <option disabled selected>Pilih Kategori</option>
                                                            <?php foreach ($divisi as $key => $value) { ?>
                                                                <option value="<?= $value->Id_Divisi ?>" <?php if($value->Id_Divisi==$sampah->Id_Divisi ) echo 'selected="selected"'; ?>><?= $value->Nama_Divisi ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <small class="form-text text-danger"><?= form_error('Id_Divisi') ?></small>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Department<span style="color: red">*</span></label>
                                                        <select class="form-select<?php if(form_error('Id_Departemen')!=null){echo ' is-invalid';} ?>" name="Id_Departemen">
                                                            <option disabled selected>Pilih Departemen</option>
                                                            <?php foreach ($departemen as $key => $value) { ?>
                                                            <option value="<?= $value->Id_Departemen ?>" <?php if($value->Id_Departemen==$sampah->Id_Departemen ) echo 'selected="selected"'; ?>><?= $value->Nama_Departemen ?></option>
                                                        <?php } ?>
                                                        </select>
                                                        <small class="form-text text-danger"><?= form_error('Id_Departemen') ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Berat Sampah Organik<span style="color: red">*</span></label>
                                                        <input type="number" id="weight_or" class="form-control<?php if(form_error('weight_or')!=null){echo ' is-invalid';} ?>" name="weight_or" placeholder="berat organik.." value="<?= $sampah->weight_or ?>">
                                                        <small class="form-text text-danger"><?= form_error('weight_or') ?></small>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Berat Sampah Non Organik<span style="color: red">*</span></label>
                                                        <input type="number" id="weight_non" class="form-control<?php if(form_error('weight_non')!=null){echo ' is-invalid';} ?>" name="weight_non" placeholder="berat non organik.." value="<?= $sampah->weight_non ?>">
                                                        <small class="form-text text-danger"><?= form_error('weight_non') ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Berat Sampah B3<span style="color: red">*</span></label>
                                                        <input type="number" id="weight_b3" class="form-control<?php if(form_error('weight_b3')!=null){echo ' is-invalid';} ?>" name="weight_b3" placeholder="berat b3.." value="<?= $sampah->weight_b3 ?>">
                                                        <small class="form-text text-danger"><?= form_error('weight_b3') ?></small>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Total Berat Sampah<span style="color: red">*</span></label>
                                                        <input type="number" id="total_berat" class="form-control<?php if(form_error('total_berat')!=null){echo ' is-invalid';} ?>" name="total_berat" placeholder="total berat sampah.." value="<?= $sampah->total_berat ?>" readonly>
                                                        <small class="form-text text-danger"><?= form_error('total_berat') ?></small>
                                                    </div>
                                                </div>
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

            <!-- CK EDITOR -->
            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
            <!-- <script type="text/javascript" src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script> -->
            <script type="text/javascript" src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>

            <!--  -->
            <script type="text/javascript">
                $(document).ready(() => {
                    $('#weight_or, #weight_non, #weight_b3').on('change', () => {
                        console.log('run');
                        var vweightor = parseInt($('#weight_or').val());
                        var vweightnon = parseInt($('#weight_non').val());
                        var vweightb3 = parseInt($('#weight_b3').val());
    
                        var total_berat = vweightor + vweightnon + vweightb3;
                        $('#total_berat').val(total_berat); 
                    });
                });
                // CKEDITOR.replace( 'isi', {
                //     filebrowserUploadUrl: '<?= base_url(); ?>assets/ckeditor/upload.php',
                //     filebrowserUploadMethod:'form'
                // });


                // function getTotalsampah() {
                //     var vweightor = parseInt(document.getElementById('weight_or').value);
                //     var vweightnon = parseInt(document.getElementById('weight_non').value);
                //     var vweightb3 = parseInt(document.getElementById('weight_b3').value);

                //     var total_berat = vweightor + vweightnon + vweightb3;
                //     document.getElementById('total_berat').value = total_berat.toFixed(2);
                // }

                $.ajax({
                type: "POST",
                url: "update.php",
                data: { total_berat: total_berat },
                success: function(result) {
                    // Tindakan setelah berhasil
                },
                error: function(xhr, status, error) {
                    // Tindakan setelah gagal
                }
                });
                
            </script>