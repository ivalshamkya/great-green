
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
                                        <h2>Ubah Produk</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-lg-end my-1 my-lg-0">
                                                <a href="<?php echo base_url('master_produk') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button>
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
                                    
                                    echo form_open_multipart('master_produk/update/'.$produk->id);?>

                                        <div class="form-group">
                                            <label class="control-label">Nama Produk<span style="color: red">*</span></label>
                                            <input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" name="nama" maxlength="100" placeholder="Nama.." value="<?= $produk->nama ?>">
                                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Ketegori Produk<span style="color: red">*</span></label>
                                            <select class="form-select <?php if(form_error('id_kategori_produk')!=null){echo ' is-invalid';} ?>" name="id_kategori_produk">
                                                <option disabled selected>Pilih Kategori</option>
                                                <?php foreach ($kategori_produk as $key => $value) { ?>
                                                    <option value="<?= $value->id ?>" <?php if($value->id==$produk->id_kategori_produk ) echo 'selected="selected"'; ?>><?= $value->nama ?></option>
                                                <?php } ?>
                                            </select>
                                            <small class="form-text text-danger"><?= form_error('id_kategori_produk') ?></small>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Harga<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control<?php if(form_error('harga')!=null){echo ' is-invalid';} ?>" name="harga" placeholder="Harga.." value="<?= $produk->harga ?>">
                                                    <small class="form-text text-danger"><?= form_error('harga') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control<?php if(form_error('stok')!=null){echo ' is-invalid';} ?>" name="stok" placeholder="Stok.." value="<?= $produk->stok ?>">
                                                    <small class="form-text text-danger"><?= form_error('stok') ?></small>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">Berat (gram)<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control<?php if(form_error('berat')!=null){echo ' is-invalid';} ?>" name="berat" placeholder="Berat.." value="<?= $produk->berat ?>">
                                                    <small class="form-text text-danger"><?= form_error('berat') ?></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Deskripsi</label>
                                            <textarea rows="3" class="form-control<?php if(form_error('deskripsi')!=null){echo ' is-invalid';} ?>" name="deskripsi"><?= $produk->deskripsi ?></textarea>
                                            <small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label class="control-label">Foto</label>
                                            <input type="file" name="gambar" class="form-control" id="preview_gambar">
                                        </div>

                                        <div class="col-lg-12 text-center mt-4 mb-4">
                                            <?php if ($produk->gambar == null){ ?>
                                                <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" id="gambar_load" width="300px" height="300px">
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/image/master/produk/'.$produk->gambar)?>" id="gambar_load" width="300px" height="300px">
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