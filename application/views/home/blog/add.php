
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="container mt-5">

                <!-- Start Content-->
                <div class="container-fluid mt-5">

                            <div class="card">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                        <h2>Tambah Blog</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('home/data_eh') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>

                                <div class="card-body">
                                    <?php 
                                    //notifikasi gagal upload
                                    if (isset($error_upload)) {
                                        echo '
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        '.$error_upload.'</div>';   
                                    }
                                    
                                    echo form_open_multipart('home/add_data_eh');?>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('Nama')!=null){echo ' is-invalid';} ?>" value="<?= set_value('Nama') ?>" name="Nama" maxlength="100" placeholder="Nama..">
                                                    <small class="form-text text-danger"><?= form_error('Nama') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Shop<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('Nama_Shop')!=null){echo ' is-invalid';} ?>" value="<?= set_value('Nama_Shop') ?>" name="Nama_Shop" maxlength="100" placeholder="Nama Shop..">
                                                    <small class="form-text text-danger"><?= form_error('Nama_Shop') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Area<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('Area')!=null){echo ' is-invalid';} ?>" value="<?= set_value('Area') ?>" name="Area" maxlength="100" placeholder="Area..">
                                                    <small class="form-text text-danger"><?= form_error('Area') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">NPK<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control<?php if(form_error('NPK')!=null){echo ' is-invalid';} ?>" value="<?= set_value('NPK') ?>" name="NPK" placeholder="No NPK..">
                                                    <small class="form-text text-danger"><?= form_error('\NPK') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                <label class="control-label">Divisi<span style="color: red">*</span></label>
                                                    <select class="form-select<?php if(form_error('Id_Divisi')!=null){echo ' is-invalid';} ?>" name="Id_Divisi">
                                                        <option disabled selected>Pilih Divisi</option>
                                                        <?php foreach ($divisi as $key => $value) { ?>
                                                            <option value="<?= $value->Id_Divisi ?>"><?= $value->Nama_Divisi ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('Id_Divisi') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                <label class="control-label">Departemen<span style="color: red">*</span></label>
                                                    <select class="form-select<?php if(form_error('Id_Departemen')!=null){echo ' is-invalid';} ?>" name="Id_Departemen">
                                                        <option disabled selected>Pilih Departemen</option>
                                                        <?php foreach ($departemen as $key => $value) { ?>
                                                            <option value="<?= $value->Id_Departemen ?>"><?= $value->Nama_Departemen ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('Id_Departemen') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="isi" class="control-label">Time  Before<span style="color: red">*</span></label>
                                                    <input type="time" id="time-before" class="form-control<?php if(form_error('timeb')!=null){echo ' is-invalid';} ?>" rows="7" name="timeb" id="timeb" placeholder="Ketik disini untuk buat Blog!"></input>
                                                    <small class="form-text text-danger"><?= form_error('timeb') ?></small>
                                                </div>
                                            </div>
                                                
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Gambar Before</label>
                                                    <input type="file" name="gambar_before" class="form-control" id="preview_gambar">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="isi" class="control-label">Time  After<span style="color: red">*</span></label>
                                                    <input type="time" id="time-after" class="form-control<?php if(form_error('timea')!=null){echo ' is-invalid';} ?>" rows="7" name="timea" id="timea" placeholder="Ketik disini untuk buat Blog!"></input>
                                                    <small class="form-text text-danger"><?= form_error('timea') ?></small>
                                                </div>
                                            </div>
                                                
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Gambar After</label>
                                                    <input type="file" name="gambar_after" class="form-control" id="preview_gambar">
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <h2 class="mb-3">Before Earth Hour</h2>
                                                <div class="form-group">
                                                    <label class="control-label">Konsumsi Energi Before Earth Hour<span style="color: red">*</span></label>
                                                    <input type="number" id="konsumsi_before" class="form-control<?php if(form_error('energi_before')!=null){echo ' is-invalid';} ?>" value="<?= set_value('energi_before') ?>" name="energi_before" maxlength="100" placeholder="konsumsi energi before EH..">
                                                    <small class="form-text text-danger"><?= form_error('energi_before') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <h2 class="mb-3">After Earth Hour</h2>
                                                <div class="form-group">
                                                    <label class="control-label">Konsumsi Energi After Earth Hour<span style="color: red">*</span></label>
                                                    <input type="number" id="konsumsi_after" class="form-control<?php if(form_error('energi_after')!=null){echo ' is-invalid';} ?>" value="<?= set_value('energi_after') ?>" name="energi_after" placeholder="konsumsi energi after EH..">
                                                    <small class="form-text text-danger"><?= form_error('energi_after') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total Konsumsi Before Earth Hour<span style="color: red">*</span></label>
                                                    <input type="number" id="total_konsumsi_before" class="form-control<?php if(form_error('total_konsumsi_before')!=null){echo ' is-invalid';} ?>" value="<?= set_value('total_konsumsi_before') ?>" name="total_konsumsi_before" maxlength="100" placeholder="Total Konsumsi Before Earth Hour.." readonly>
                                                    <small class="form-text text-danger"><?= form_error('total_konsumsi_before') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total Konsumsi After Earth Hour<span style="color: red">*</span></label>
                                                    <input type="number" id="total_konsumsi_after" class="form-control<?php if(form_error('total_konsumsi_after')!=null){echo ' is-invalid';} ?>" value="<?= set_value('total_konsumsi_after') ?>" name="total_konsumsi_after" placeholder="Total Konsumsi After Earth Hour.." readonly>
                                                    <small class="form-text text-danger"><?= form_error('total_konsumsi_after') ?></small>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total Tco<sub>2</sub>/Tahun<span style="color: red">*</span></label>
                                                    <input type="number" id="total_tco" class="form-control<?php if(form_error('total_tco')!=null){echo ' is-invalid';} ?>" value="<?= set_value('total_tco') ?>" name="total_tco" maxlength="100" placeholder="Total Tco₂/Tahun.." readonly>
                                                    <small class="form-text text-danger"><?= form_error('total_tco') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Total Reduce Tco<sub>2</sub>/Tahun<span style="color: red">*</span></label>
                                                    <input type="number" id="total_reduce_tco" class="form-control<?php if(form_error('total_reduce_tco')!=null){echo ' is-invalid';} ?>" value="<?= set_value('total_reduce_tco') ?>" name="total_reduce_tco" placeholder="Total Reduce Tco₂/Tahun.." readonly>
                                                    <small class="form-text text-danger"><?= form_error('total_reduce_tco') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="my-4" />
                                        <!-- Button -->
                                        <div class="col-md-12 d-grid text-center">
                                            <!-- <button type="submit" id="save" onClick="callMe()" class="btn btn-primary mr--3"><i class="fa fa-save"></i>&nbsp; Tambah</button> -->
                                            <button type="submit" id="save" onclick="change()" class="btn btn-primary mr--3"><i class="fa fa-save"></i>&nbsp; Tambah</button>
                                        </div>
                                    </div>

                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
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
            ]
            <script type="text/javascript" src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>

            <!--  -->
            <script type="text/javascript">

                $(document).ready(() => {

                    let konsumsi_after = $('#konsumsi_after');
                    let konsumsi_before = $('#konsumsi_before');
                    let total_tco = $('#total_tco');
                    let total_reduce_tco = $('#total_reduce_tco');
                    let time_before = $('#time-before');
                    let time_after = $('#time-after');

                    $('#konsumsi_before, #time-before, #time-after').on('change', () => {
                        var timeBefore = (time_before.val()).split(":");
                        var timeAfter = (time_after.val()).split(":");
                        if(konsumsi_before.val() != ""){
                            const dateBefore = new Date('2023-01-01T00:00:00');
                            dateBefore.setHours(timeBefore[0]);
                            dateBefore.setMinutes(timeBefore[1]);
                            
                            const dateAfter = new Date('2023-01-01T00:00:00');
                            dateAfter.setHours(timeAfter[0]);
                            dateAfter.setMinutes(timeAfter[1]);

                            if(dateAfter.getTime() < dateBefore.getTime()){
                                dateAfter.setDate(dateAfter.getDate() + 1);
                            }
                            
                            const diffInMs = Math.abs(dateBefore.getHours() - dateAfter.getHours());
                            
                            
                            calc = getTotalTco2(diffInMs, konsumsi_before.val()).toFixed(2);
                            total_tco.val(calc);
                        }

                    });

                    $('#konsumsi_after, #time-before, #time-after').on('change', () => {
                        var timeBefore = (time_before.val()).split(":");
                        var timeAfter = (time_after.val()).split(":");

                        if(konsumsi_after.val() != ""){
                            const dateBefore = new Date('2023-01-01T00:00:00');
                            dateBefore.setHours(timeBefore[0]);
                            dateBefore.setMinutes(timeBefore[1]);
                            
                            const dateAfter = new Date('2023-01-01T00:00:00');
                            dateAfter.setHours(timeAfter[0]);
                            dateAfter.setMinutes(timeAfter[1]);
    
                            if(dateAfter.getTime() < dateBefore.getTime()){
                                dateAfter.setDate(dateAfter.getDate() + 1);
                            }
                            
                            const diffInMs = Math.abs(dateBefore.getHours() - dateAfter.getHours());
    
                            calc = getTotalTco2(diffInMs, konsumsi_after.val()).toFixed(2);
                            total_reduce_tco.val(calc);
                        }
                    });
    
                    function getTotalTco2(diff, total) {
                        var result = ((diff * total)/1000) * (0.87);
                        return result;
                    }
                })
                

            </script>