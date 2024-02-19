
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
                                        <h2>Ubah Konsistensi</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('home/konsistensi') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
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
                                    
                                    echo form_open_multipart('home/update_konsistensi/'.$konsistensi->id);?>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" name="nama" maxlength="100" placeholder="Nama.." value="<?= $konsistensi->nama ?>">
                                                    <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Atasan<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control<?php if(form_error('Nama_Atasan')!=null){echo ' is-invalid';} ?>" name="Nama_Atasan" maxlength="100" placeholder="Nama Atasan.." value="<?= $konsistensi->Nama_Atasan ?>">
                                                    <small class="form-text text-danger"><?= form_error('Nama_Atasan') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <div class="form-group">
                                                <label class="control-label">NPK<span style="color: red">*</span></label>
                                                <input type="number" class="form-control<?php if(form_error('No_NPK')!=null){echo ' is-invalid';} ?>" name="No_NPK" placeholder="No NPK.." value="<?= $konsistensi->No_NPK ?>">
                                                <small class="form-text text-danger"><?= form_error('No_NPK') ?></small>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                <label class="control-label">Divisi<span style="color: red">*</span></label>
                                                    <select class="form-select <?php if(form_error('Id_Divisi')!=null){echo ' is-invalid';} ?>" name="Id_Divisi">
                                                        <option disabled selected>Pilih Kategori</option>
                                                        <?php foreach ($divisi as $key => $value) { ?>
                                                            <option value="<?= $value->Id_Divisi ?>" <?php if($value->Id_Divisi==$konsistensi->Id_Divisi ) echo 'selected="selected"'; ?>><?= $value->Nama_Divisi ?></option>
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
                                                        <option value="<?= $value->Id_Departemen ?>" <?php if($value->Id_Departemen==$konsistensi->Id_Departemen ) echo 'selected="selected"'; ?>><?= $value->Nama_Departemen ?></option>
                                                    <?php } ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('Id_Departemen') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" id="preview_gambar">
                                        </div>

                                        <div class="col-lg-12 text-center mt-4 mb-4">
                                            <?php if ($konsistensi->gambar == null){ ?>
                                                <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" id="gambar_load" width="300px" height="300px">
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/image/master/bank/'.$konsistensi->gambar)?>" id="gambar_load" width="300px" height="300px">
                                            <?php } ?>
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


            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->