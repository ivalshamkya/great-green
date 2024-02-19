            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
           

            <div class="container mt-5">

                <!-- Start Content-->
                <div class="container-fluid mt-5">
                        
                    <!-- start page title -->
                    <div class="row ">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/produk') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Detail Produk</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">

                                            <div class="tab-content pt-0">
                                                <div class="tab-pane active show" id="product-1-item">
                                                    <img src="

                                                    <?php 
                                                        if($produk->gambar == null){
                                                            echo base_url('assets/image/master/all/Camera_Green.svg');
                                                        } else {
                                                            echo base_url('assets/image/master/produk/'.$produk->gambar);
                                                        }
                                                    ?>

                                                    " width="300px" height="300px" class="mx-auto d-block rounded">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-7 mt-2">
                                            <div class="ps-xl-3 mt-5 mt-xl-0">
                                                <a href="<?= base_url('home/produk_kategori/'.$produk->id_kategori_produk); ?>" class="text-primary"><?= $produk->kategori ?></a>
                                                <h3 class="mb-2"><?= $produk->nama ?></h3>
                                               
                                                <h2><span class="badge bg-soft-success text-success mb-1">Rp <?php echo number_format($produk->harga, 0, ',', '.') ?></span></h2>
                                                
                                                <p class="mb-3">Stok Tersedia <?= $produk->stok ?> Pcs</p>
                                                
                                                <p class="text-muted mb-4">
                                                    <?php 
                                                        if ( $produk->deskripsi == null) {
                                                            echo '-';
                                                        } else {
                                                            echo  $produk->deskripsi;
                                                        }    
                                                    ?>
                                                </p>

                                                <?php 
                                                    echo form_open('penjualan_produk/add');
                                                    echo form_hidden('id', $produk->id);
                                                    echo form_hidden('price', $produk->harga);
                                                    echo form_hidden('name', $produk->nama);
                                                    echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                                                ?>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <input type="number" name="qty" class="form-control" value="1" min="1" max="<?php echo $produk->stok?>">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light swalDefaultSuccess">
                                                            <span class="btn-label"><i class="mdi mdi-cart"></i></span>Tambah Keranjang
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php form_close() ?>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->
                    
                </div> <!-- container -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

