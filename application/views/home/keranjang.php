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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Keranjang</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
									<div class="row">
										<div class="col-lg-8">
											<?php echo form_open('penjualan_produk/refresh_cart'); ?>
											<div class="table-responsive">
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

												<table class="table table-borderless table-nowrap table-centered mb-0">
													<thead class="table-light">
														<tr>
															<th>Produk</th>
															<th style="text-align:center">Harga</th>
															<th width="100px" style="text-align:center">Jumlah</th>
															<th width="100px" style="text-align:center">Sub Berat</th>
															<th style="text-align:center">Sub Total</th>
															<th style="width: 50px;"></th>
														</tr>
													</thead>
													<tbody>
														<?php 
															$i = 1;
															$total_berat = 0;
															foreach ($this->cart->contents() as $items){ 
																$produk = $this->m_home->get_data_by_id($items['id']);
																$berat = $items['qty'] * $produk->berat;
																$total_berat = $total_berat + $berat;
														?>

															<tr>
																<td style="text-align:left">
																	<img src=" 
																	<?php 
																		if($produk->gambar == null){
																			echo base_url('assets/image/master/all/Camera_Green.svg');
																		} else {
																			echo base_url('assets/image/master/produk/'.$produk->gambar);
																		}
																	?>" class="rounded me-3" height="48" />
																	<p class="m-0 d-inline-block align-middle font-16">
																		<a href="#" class="text-reset font-family-secondary"><?php echo $items['name']; ?></a>
																	</p>
																</td>
																<td style="text-align:right">
																	Rp <?php echo number_format($items['price'], 0, ',', '.')?>
																</td>
																<td>
																	<?php echo form_input(array(
																		'name' => $i.'[qty]', 
																		'value' => $items['qty'], 
																		'min' => '0', 
																		'max'=> $produk->stok,
																		'size' => '5', 
																		'type'=>'number',
																		'class'=>'form-control'
																		)); ?>
																</td>
																<td style="text-align:center">
																	<?php echo $berat ?> Gr
																</td>
																<td style="text-align:right">
																	Rp <?php echo number_format($items['subtotal'], 0, ',', '.'); ?>
																</td>
																<td>
																	<a href="<?php echo base_url('penjualan_produk/delete_item/'.$items['rowid']) ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
																</td>
															</tr>
														<?php 
															$i++; 
														 	} 
														?>
													</tbody>
												</table>
												<!-- <div class="col-sm-12 mt-3">
													<div class="col-sm-6">
														<button type="submit" href="?php echo base_url('c_tr_jual/update_keranjang') ?>" class="btn btn-outline-primary waves-effect waves-light"><i class="mdi mdi-refresh me-1"></i>Refresh</button>
														<a href=?php echo base_url('c_tr_jual/delete_all_keranjang') ?>" class="btn btn-outline-danger waves-effect waves-light"><i class="mdi mdi-delete-variant me-1"></i>Hapus</a>
													</div>
												</div> -->
											</div> <!-- end table-responsive-->

											<div class="row mt-3">
												<div class="col-sm-6 d-grid">
													<a href="<?php echo base_url('penjualan_produk/delete_cart') ?>" class="btn btn-outline-danger waves-effect waves-light" onclick="return confirm('Yakin ingin hapus keranjang?')"><i class="mdi mdi-delete-variant me-1"></i>Hapus Keranjang</a>
												</div>
												<div class="col-sm-6 d-grid">
													<button type="submit" href="<?php echo base_url('penjualan_produk/refresh_cart') ?>" class="btn btn-outline-primary waves-effect waves-light"><i class="mdi mdi-refresh me-1"></i>Refresh Keranjang</button>	
												</div>
											</div>
											<?php echo form_close(); ?>
										</div><!-- end col -->

										<div class="col-lg-4">
											<div class="border p-3 mt-4 mt-lg-0 rounded">
												<h4 class="header-title mb-3">Total Keranjang</h4>

												<div class="table-responsive">
													<table class="table mb-0">
														<tbody>
															<tr>
																<td>Total Harga</td>
																<td class="text-sm-end"><b>Rp <?php echo number_format($this->cart->total(), 0, ',', '.'); ?></b></td>
															</tr>
															<tr>
																<td>Total Berat</td>
																<td class="text-sm-end"><b><?php echo number_format($total_berat, 0, ',', '.'); ?> Gr</b></td>
															</tr>
														</tbody>
													</table>
												</div>
												<!-- end table-responsive -->

												<!-- action buttons-->
												<div class="row mt-3">
													
													<div class="col-sm-12">
														<div class="text-sm-end">
															<a href="<?php echo base_url('penjualan_produk/view_checkout') ?>" class="btn btn-primary"><i class="mdi mdi-cart-plus me-1"></i> Checkout </a>
														</div>
													</div> <!-- end col -->
												</div> <!-- end row-->
											</div>
										</div> <!-- end col -->
									</div> <!-- end row -->
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

