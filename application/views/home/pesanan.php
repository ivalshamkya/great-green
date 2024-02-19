
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
                                            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Riwayat Pesanan</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <?php
                                                    if ($this->session->flashdata('pesan_error')) {
                                                        echo '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                                                        echo $this->session->flashdata('pesan_error');
                                                        echo '</div>';
                                                    }
                                                    if ($this->session->flashdata('pesan_success')) {
                                                        echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>';
                                                        echo $this->session->flashdata('pesan_success');
                                                        echo '</div>';
                                                    }
                                                ?>
                                                
                                                <ul class="nav nav-tabs nav-bordered">
                                                    <li class="nav-item">
                                                        <a href="#semua" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Semua
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#belumbayar" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Belum Bayar
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#diproses" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Diproses
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#dikirim" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Dikirim
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#selesai" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Selesai
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#dibatalkan" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            Dibatalkan
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- Isi Tab -->
                                                <div class="tab-content m-2">
                                                    <!-- Tab Semua -->
                                                    <div class="tab-pane  show active" id="semua">
                                                        <table id="" class="display table dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Transaksi</th>
                                                                    <th>Tanggal Order</th>
                                                                    <th>Tujuan</th>
                                                                    <th>Expedisi</th>
                                                                    <th class="text-center">Total Bayar</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                <?php foreach ($pesanan as $key => $value) { ?>
                                                                <tr>
                                                                    <td><?= $value->kode_penjualan ?></td>
                                                                    <td><?= $value->tanggal_order ?></td>
                                                                    <td><?= $value->kota ?>, <?= $value->provinsi ?></td>
                                                                    <td><?= strtoupper($value->expedisi) ?>, <?= $value->paket ?></td>
                                                                    <td style="text-align:right">Rp <?php echo number_format($value->total_bayar, 0, ',', '.') ?></td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==1) { ?>
                                                                            <span class="badge bg-warning">Belum Bayar</span>
                                                                        <?php } else if($value->status==2) { ?>
                                                                            <span class="badge bg-info"><i class="fa fa-check"></i></span>
                                                                            <span class="badge badge-outline-info">Menunggu Konfirmasi</span>
                                                                        <?php } else if($value->status==3) { ?>
                                                                            <span class="badge bg-info"><i class="fa fa-check"></i></span>
                                                                            <span class="badge bg-info">Diproses</span>
                                                                        <?php } else if($value->status==4) { ?>
                                                                            <span class="badge bg-blue">Dikirim</span>
                                                                        <?php } else if($value->status==5) { ?>
                                                                            <span class="badge bg-success">Selesai</span>
                                                                        <?php } else if($value->status==6) { ?>
                                                                            <span class="badge bg-danger">Dibatalkan</span>
                                                                        <?php } else if($value->status==7) { ?>
                                                                            <span class="badge badge-outline-danger">Pembayaran Ditolak</span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==1) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Bayar/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="far fa-money-bill-alt">&nbsp;</i>Bayar</a>
                                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mod_batal<?= $value->kode_penjualan ?>" data-toggle="tooltip" data-placement="top" title="Batalkan Pesanan"><i class="fa fa-ban"></i></button>
                                                                        <?php } else if($value->status==2) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } else if($value->status==3) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } else if($value->status==4) { ?>
                                                                            <button type="button" class="btn btn-blue btn-sm" data-bs-toggle="modal" data-bs-target="#mod_tiba<?= $value->id ?>"><i class="fa fa-handshake">&nbsp;</i>Tiba</button>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-outline-blue btn-sm" data-toggle="tooltip" data-placement="top" title="Detail Pesanan"><i class="fa fa-eye"></i></a>
                                                                        <?php } else if($value->status==5) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } else if($value->status==6) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-danger btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } else if($value->status==7) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Detail Pesanan"><i class="fa fa-eye"></i></a>
                                                                            <a href="<?= base_url('Penjualan_Produk/Bayar/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="far fa-money-bill-alt">&nbsp;</i>Bayar</a>
                                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mod_batal<?= $value->kode_penjualan ?>" data-toggle="tooltip" data-placement="top" title="Batalkan Pesanan"><i class="fa fa-ban"></i></button>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Tab Semua -->

                                                    <!-- Tab Belum Bayar -->
                                                    <div class="tab-pane" id="belumbayar">
                                                        <table id="" class="display table dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Transaksi</th>
                                                                    <th>Tanggal Order</th>
                                                                    <th>Tujuan</th>
                                                                    <th>Expedisi</th>
                                                                    <th class="text-center">Total Bayar</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                <?php 
                                                                    foreach ($pesanan as $key => $value) { 
                                                                        if($value->status == 1 || $value->status == 7){
                                                                ?>

                                                                <tr>
                                                                    <td><?= $value->kode_penjualan ?></td>
                                                                    <td><?= $value->tanggal_order ?></td>
                                                                    <td><?= $value->kota ?>, <?= $value->provinsi ?></td>
                                                                    <td><?= strtoupper($value->expedisi) ?>, <?= $value->paket ?></td>
                                                                    <td style="text-align:right">Rp <?php echo number_format($value->total_bayar, 0, ',', '.') ?></td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==1) { ?>
                                                                            <span class="badge bg-warning">Belum Bayar</span>
                                                                        <?php } else if($value->status==7) { ?>
                                                                            <span class="badge badge-outline-danger">Pembayaran Ditolak</span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==1) { ?>
                                                                            <a href="<?= base_url('penjualan_produk/bayar/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="far fa-money-bill-alt">&nbsp;</i>Bayar</a>
                                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mod_batal" data-toggle="tooltip" data-placement="top" title="Batalkan Pesanan"><i class="fa fa-ban"></i></button>
                                                                        <?php } else if($value->status==7) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Detail Pesanan"><i class="fa fa-eye"></i></a>
                                                                            <a href="<?= base_url('Penjualan_Produk/Bayar/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="far fa-money-bill-alt">&nbsp;</i>Bayar</a>
                                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#mod_batal<?= $value->kode_penjualan ?>" data-toggle="tooltip" data-placement="top" title="Batalkan Pesanan"><i class="fa fa-ban"></i></button>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                                        }
                                                                    } 
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Tab Belum Bayar -->

                                                    <!-- Tab Diproses -->
                                                    <div class="tab-pane" id="diproses">
                                                        <table id="" class="display table dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Transaksi</th>
                                                                    <th>Tanggal Order</th>
                                                                    <th>Tujuan</th>
                                                                    <th>Expedisi</th>
                                                                    <th class="text-center">Total Bayar</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                <?php 
                                                                    foreach ($pesanan as $key => $value) { 
                                                                        if($value->status == 2 || $value->status == 3){
                                                                ?>

                                                                <tr>
                                                                    <td><?= $value->kode_penjualan ?></td>
                                                                    <td><?= $value->tanggal_order ?></td>
                                                                    <td><?= $value->kota ?>, <?= $value->provinsi ?></td>
                                                                    <td><?= strtoupper($value->expedisi) ?>, <?= $value->paket ?></td>
                                                                    <td style="text-align:right">Rp <?php echo number_format($value->total_bayar, 0, ',', '.') ?></td>
                                                                    <td class="text-center">
                                                                        <?php  if($value->status==2) { ?>
                                                                            <span class="badge bg-info"><i class="fa fa-check"></i></span>
                                                                            <span class="badge badge-outline-info">Menunggu Konfirmasi</span>
                                                                        <?php } else if($value->status==3) { ?>
                                                                            <span class="badge bg-info"><i class="fa fa-check"></i></span>
                                                                            <span class="badge bg-info">Diproses</span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==2) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } else if ($value->status==3) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                                        }
                                                                    } 
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Tab Diproses -->

                                                    <!-- Tab Dikirim -->
                                                    <div class="tab-pane" id="dikirim">
                                                        <table id="" class="display table dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Transaksi</th>
                                                                    <th>Tanggal Order</th>
                                                                    <th>Tujuan</th>
                                                                    <th>Expedisi</th>
                                                                    <th>Resi</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                <?php 
                                                                    foreach ($pesanan as $key => $value) { 
                                                                        if($value->status == 4){
                                                                ?>

                                                                <tr>
                                                                    <td><?= $value->kode_penjualan ?></td>
                                                                    <td><?= $value->tanggal_order ?></td>
                                                                    <td><?= $value->kota ?>, <?= $value->provinsi ?></td>
                                                                    <td><?= strtoupper($value->expedisi) ?>, <?= $value->paket ?></td>
                                                                    <td style="text-center"><b><?= $value->resi ?></b></td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==4) { ?>
                                                                            <span class="badge bg-blue">Dikirim</span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==4) { ?>
                                                                            <button type="button" class="btn btn-blue btn-sm" data-bs-toggle="modal" data-bs-target="#mod_tiba<?= $value->id ?>"><i class="fa fa-handshake">&nbsp;</i>Tiba</button>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-outline-blue btn-sm" data-toggle="tooltip" data-placement="top" title="Detail Pesanan"><i class="fa fa-eye"></i></a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                                        }
                                                                    } 
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Tab Dikirim -->

                                                    <!-- Tab Selesai -->
                                                    <div class="tab-pane" id="selesai">
                                                        <table id="" class="display table dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Transaksi</th>
                                                                    <th>Tanggal Order</th>
                                                                    <th>Tujuan</th>
                                                                    <th>Expedisi</th>
                                                                    <th class="text-center">Total Bayar</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                <?php 
                                                                    foreach ($pesanan as $key => $value) { 
                                                                        if($value->status == 5){
                                                                ?>

                                                                <tr>
                                                                    <td><?= $value->kode_penjualan ?></td>
                                                                    <td><?= $value->tanggal_order ?></td>
                                                                    <td><?= $value->kota ?>, <?= $value->provinsi ?></td>
                                                                    <td><?= strtoupper($value->expedisi) ?>, <?= $value->paket ?></td>
                                                                    <td style="text-align:right">Rp <?php echo number_format($value->total_bayar, 0, ',', '.') ?></td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==5) { ?>
                                                                            <span class="badge bg-success">Selesai</span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==5) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                                        }
                                                                    } 
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Tab Selesai -->

                                                    <!-- Tab Dibatalkan -->
                                                    <div class="tab-pane" id="dibatalkan">
                                                        <table id="" class="display table dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kode Transaksi</th>
                                                                    <th>Tanggal Order</th>
                                                                    <th>Tujuan</th>
                                                                    <th>Expedisi</th>
                                                                    <th class="text-center">Total Bayar</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                <?php 
                                                                    foreach ($pesanan as $key => $value) { 
                                                                        if($value->status == 6){
                                                                ?>

                                                                <tr>
                                                                    <td><?= $value->kode_penjualan ?></td>
                                                                    <td><?= $value->tanggal_order ?></td>
                                                                    <td><?= $value->kota ?>, <?= $value->provinsi ?></td>
                                                                    <td><?= strtoupper($value->expedisi) ?>, <?= $value->paket ?></td>
                                                                    <td style="text-align:right">Rp <?php echo number_format($value->total_bayar, 0, ',', '.') ?></td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==6) { ?>
                                                                            <span class="badge bg-danger">Dibatalkan</span>
                                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if($value->status==6) { ?>
                                                                            <a href="<?= base_url('Penjualan_Produk/Pesanan_Detail/'.$value->kode_penjualan) ?>" class="btn btn-danger btn-sm"><i class="fa fa-eye">&nbsp;</i>Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php 
                                                                        }
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Tab Dibatalkan -->
                                                    
                                                </div>
                                            </div>
                                        </div> <!-- end card-->
                                    </div> <!-- end col -->
                                </div>


                            <!-- MODAL -->

                            <!-- modal pembatalan pesanan -->
                            <?php foreach ($pesanan as $key => $value) { ?>
                            <div id="mod_batal<?= $value->kode_penjualan ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="standard-modalLabel">Konfirmasi</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Yakin batalkan pesanan?</h3>
                                            <p>Silahkan konfirmasi ya, jika setuju.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="fa fa-ban">&nbsp;</i>Batal</button>
                                            <a href="<?= base_url('Penjualan_Produk/Batal/'.$value->kode_penjualan) ?>" class="btn btn-primary"><i class="fa fa-check">&nbsp;</i>Ya, Setuju</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <?php } ?>

                            <!-- modal pembatalan pesanan -->
                            <?php foreach ($pesanan as $key => $value) { ?>
                            <div id="mod_tiba<?= $value->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="standard-modalLabel">Konfirmasi</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Yakin pesanan sudah tiba?</h3>
                                            <p>Silahkan konfirmasi ya, jika setuju.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="fa fa-ban">&nbsp;</i>Batal</button>
                                            <a href="<?= base_url('Penjualan_Produk/Tiba/'.$value->id) ?>" class="btn btn-primary"><i class="fa fa-check">&nbsp;</i>Ya, Setuju</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <?php } ?>

                            </div> <!-- container -->
                        </div> <!-- content -->
                    </div>
                </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->