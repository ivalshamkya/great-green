
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

                <!-- Main content -->
                <div class="container mt-5">
                    <div class="container-fluid mt-5">

                        <!-- start page title -->
                        <div class="row ">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo base_url('Home/Pesanan') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Pesanan</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="row">
                                    <div class="col-12">
                                       <!-- project card -->
                                        <div class="card d-block">
                                            <div class="card-body">
                                
                                                <!-- end form-check-->
                                                <h5 class="text-muted">Kode Pemesanan</h5>
                                                <h3><?= $pesanan->kode_penjualan ?></h3>

                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Status</p>
                                                        <div class="d-flex align-items-start">
                                                            <div class="w-100">
                                                                <?php if($pesanan->status==1) { ?>
                                                                    <span class="badge bg-warning">Belum Bayar</span>
                                                                <?php } else if($pesanan->status==2) { ?>
                                                                    <span class="badge bg-info"><i class="fa fa-check"></i></span>
                                                                    <span class="badge badge-outline-info">Sudah Bayar, Menunggu Konfirmasi</span>
                                                                <?php } else if($pesanan->status==3) { ?>
                                                                    <span class="badge bg-info"><i class="fa fa-check"></i></span>
                                                                    <span class="badge bg-info">Diproses</span>
                                                                <?php } else if($pesanan->status==4) { ?>
                                                                    <span class="badge bg-blue">Dikirim</span>
                                                                <?php } else if($pesanan->status==5) { ?>
                                                                    <span class="badge bg-success">Selesai, Pesanan Tiba Di Tujuan</span>
                                                                <?php } else if($pesanan->status==6) { ?>
                                                                    <span class="badge bg-danger">Dibatalkan</span>
                                                                <?php } else if($pesanan->status==7) { ?>
                                                                    <span class="badge badge-outline-danger">Pembayaran Ditolak</span>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div>
                                                    <!-- end col -->

                                                </div>
                                                <!-- end row -->

                                                <?php if ($pesanan->keterangan!=null) {?>
                                                    <h5 class="mt-3">Keterangan<span class="text-danger">*</span></h5>
                                                    <p class="text-muted mb-2">
                                                        <?= $pesanan->keterangan ?>
                                                    </p>
                                                <?php } ?>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Penerima</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-account-arrow-left-outline font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->nama_penerima ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div>
                                                    <!-- end col -->
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Telepon</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-phone font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->telepon ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Email</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-email-outline font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->email ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Tanggal Pesan</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-calendar-cursor font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->tanggal_order ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div>
                                                    <!-- end col -->
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Estimasi Tiba</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-bus-clock font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->estimasi_tiba ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Tanggal Tiba</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-calendar-check font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?php
                                                                        if($pesanan->tanggal_tiba!=null) { 
                                                                            echo $pesanan->tanggal_tiba;
                                                                        } else {
                                                                            echo 'Belum Tiba';
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

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Expedisi</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-truck-fast-outline font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?php echo strtoupper ($pesanan->expedisi) ?> <?= $pesanan->paket ?> | <?php echo number_format($pesanan->berat, 0, ',', '.') ?> Gr
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div>
                                                    <!-- end col -->
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Ongkir</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-cash-multiple font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                Rp <?php echo number_format($pesanan->ongkir, 0, ',', '.') ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Resi</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-barcode-scan font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?php
                                                                        if($pesanan->resi!=null) { 
                                                                            echo $pesanan->resi;
                                                                        } else {
                                                                            echo 'Belum Ada Resi';
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

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Kota</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-home-city-outline font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->kota ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div>
                                                    <!-- end col -->
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Provinsi</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-city-variant-outline font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->provinsi ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                
                                                    <div class="col-md-4">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Kode Pos</p>
                                                        <div class="d-flex align-items-start">
                                                            <i class="mdi mdi-postage-stamp font-18 text-success me-1"></i>
                                                            <div class="w-100">
                                                                <h5 class="mt-1 font-size-14">
                                                                    <?= $pesanan->kode_pos ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->

                                                <h5 class="mt-3">Alamat Lengkap</h5>
                                                <p class="text-muted mb-2">
                                                    <?= $pesanan->alamat ?>
                                                </p>

                                                <h5 class="mt-3">Catatan</h5>
                                                <p class="text-muted mb-2">
                                                    <?php
                                                        if($pesanan->catatan!=null) { 
                                                            echo $pesanan->catatan;
                                                        } else {
                                                            echo '-';
                                                        }
                                                    ?>
                                                </p>


                                                <!-- Detail Pesanan -->
                                                <div class="row p-2">

                                                    <div class="border rounded mb-0">
                                                        <h4 class="header-title p-2 mb-0 mt-2">Detail Produk</h4>
                    
                                                        <div class="table-responsive">
                                                            <table class="table table-centered table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Produk</th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th width="100px" style="text-align:center">Sub Total</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php 
                                                                        $i = 1;
                                                                    // $detail = $this->m_penjualan_produk->by_id_detail_pesanan($pesanan->kode_penjualan);
                                                                        foreach ($detail_pesanan as $key => $value){ 
                                                                    ?>

                                                                    <tr class="align-middle">
                                                                        <td>
                                                                            <div class="row">
                                                                                <div class="col-3">
                                                                                    <img src="
                                                                                    <?php 
                                                                                        if($value->gambar == null){
                                                                                            echo base_url('assets/image/master/all/Camera_Green.svg');
                                                                                        } else {
                                                                                            echo base_url('assets/image/master/produk/'.$value->gambar);
                                                                                        }
                                                                                    ?>
                                                                                    " class="rounded" height="40" />
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <a href="#" class="text-body fw-semibold"><?php echo $value->nama ?></a>
                                                                                    <small class="d-block"><?php echo $value->qty ?> x Rp <?php echo number_format($value->harga, 0, ',', '.')?> (<?php echo $value->berat * $value->qty ?> Gr)</small>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td></td>
                                                                        <td></td>

                                                                        <td class="text-end">
                                                                            Rp <?php echo number_format($value->sub_total, 0, ',', '.'); ?>	
                                                                        </td>
                                                                    </tr>

                                                                    <?php 
                                                                        $i++; 
                                                                        } 
                                                                    ?>

                                                                    <tr class="text-end">
                                                                        <td colspan="2">
                                                                            <h6 class="m-0 text-muted">Sub Total:</h6>
                                                                        </td>
                                                                        <td colspan="2" class="text-end">
                                                                            <b>Rp <?php echo number_format($pesanan->sub_total_harga, 0, ',', '.'); ?></b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td colspan="2">
                                                                            <h6 class="m-0 text-muted">Sub Berat:</h6>
                                                                        </td>
                                                                        <td colspan="2" class="text-end">
                                                                            <b><?php echo number_format($pesanan->berat, 0, ',', '.'); ?> Gr</b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td colspan="2">
                                                                            <h6 class="m-0 text-muted">Ongkir:</h6>
                                                                        </td>
                                                                        <td colspan="2" class="text-end">
                                                                            <b id="ongkir" name="ongkir"><?php echo number_format($pesanan->ongkir)?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td colspan="2">
                                                                            <h4 class="m-0">Total Bayar:</h4>
                                                                        </td>
                                                                        <td colspan="2" class="text-end fw-semibold">
                                                                            <?php echo number_format($pesanan->total_bayar)?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            
                                                        </div>
                                                        <!-- end table-responsive -->
                                                    </div> <!-- end .border-->

                                                </div> <!-- end row -->
                                
                                            </div>
                                            <!-- end card-body-->
                                        </div>
                                        <!-- end card-->
                                    </div> <!-- end col -->
                                </div>
                            </div> <!-- container -->
                        </div> <!-- content -->
                    </div>
                </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

