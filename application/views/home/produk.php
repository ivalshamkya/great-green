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
                                            <h1 class="mb-0">Produk Kami</h1>
                                            <p>Hasil keranjinan tangan UMKM Great Green.</p>
                                        </div>

                                        <div class="row justify-content-between mt-2">
                                            <div class="col-auto">
                                                <?php $kategori = $this->m_home->get_data_all_table('kategori_produk'); ?>
                                                <form class="d-flex flex-wrap align-items-center">
                                                    <label for="status-select" class="me-2">Kategori</label>
                                                    <div class="me-sm-3">
                                                        <select class="form-select my-1 my-lg-0" onchange="window.open(this.value,'_self');">
                                                            <option selected="">Pilih Kategori Produk</option>
                                                            <?php foreach ($kategori as $key => $value) { ?>
                                                                <option value="<?= base_url('home/produk_kategori/'.$value->id) ?>"><?= $value->nama ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="col-auto">
                                                <div class="text-lg-end my-1 my-lg-0">
                                                    <a href="<?= base_url('home/produk'); ?>" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye me-1"></i>Semua Kategori</a>
                                                </div>
                                            </div><!-- end col-->
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                             
                            <?php foreach ($produk as $key => $value) { ?>

                            <div class="col-md-6 col-xl-3">

                                <?php 
                                    echo form_open('penjualan_produk/add');
                                    echo form_hidden('id', $value->id);
                                    echo form_hidden('qty', 1);
                                    echo form_hidden('price', $value->harga);
                                    echo form_hidden('name', $value->nama);
                                    echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                                ?>    

                                <div class="card product-box">
                                    <div class="card-body">
                                        <div class="bg-none text-center">
                                            <img src="
                                            
                                            <?php 
                                                if($value->gambar == null){
                                                    echo base_url('assets/image/master/all/Camera_Green.svg');
                                                } else {
                                                    echo base_url('assets/image/master/produk/'.$value->gambar);
                                                }
                                            ?>" height="200px"  />
                                        </div>
    
                                        <div class="product-info">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="font-16 mt-0 sp-line-1"><a href="<?= base_url('home/detail/'.$value->id); ?>" class="text-dark"><?= $value->nama ?></a> </h5>
                                                    <div class="text-primary mb-1 font-15">
                                                       <b>Rp <?php echo number_format($value->harga, 0, ',', '.') ?></b> 
                                                    </div>
                                                    <h6 class="m-0"> <span class="text-muted"> Tersedia <?= $value->stok ?> pcs</span></h6>
                                                    <div class="row align-items-center mt-2">
                                                        <div class="col-auto">
                                                            <!-- <a href="#" class="btn btn-xs btn-success waves-effect waves-light swalDefaultSuccess"><span class="btn-label"><i class="fas fa-plus"></i></span>Keranjang</a> -->
                                                            <button type="submit" class="btn btn-xs btn-success waves-effect waves-light swalDefaultSuccess"><span class="btn-label"><i class="fas fa-plus"></i></span>Keranjang</button>
                                                        </div>
                                                        <div class="col text-lg-end">
                                                            <a href="<?= base_url('home/detail/'.$value->id); ?>" class="btn btn-xs btn-info waves-effect waves-light"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div> <!-- end row -->
                                        </div> <!-- end product info-->
                                    </div>
                                </div> <!-- end card-->

                                <?php echo form_close() ?>   
                                
                            </div> <!-- end col-->

                            <?php } ?>
                            
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
