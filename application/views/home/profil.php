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
                                <h4 class="page-title">Profil</h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
						<div class="col-12">
							<!-- project card -->
							<div class="card d-block">
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

										<div class="row">
											<div class="col-3">
												<img class="m-2" src="<?php 

												if($user->foto_profil == null){
													echo base_url('assets/image/master/all/Profile_Green.svg');
												} else {
													echo base_url('assets/image/profile/'.$user->foto_profil);
												}

												?>" id="gambar_load" width="250px" height="250px">
											</div>

											<div class="col-9">
												<!-- end form-check-->
												<h3><?= $user->nama ?></h3>
								
												<div class="row mb-2">
													<div class="col-md-4">
														<!-- assignee -->
														<p class="mt-2 mb-1 text-muted">Role</p>
														<div class="d-flex align-items-start">
															<div class="w-100">
																<?php if ($user->role == 4) {echo '<span class="badge bg-warning">Anggota</span>';} ?>
																<?php if ($user->role == 3) {echo '<span class="badge bg-info">Admin</span>';} ?>
																<?php if ($user->role == 2) {echo '<span class="badge bg-primary">Kepala Cabang</span>';} ?>
																<?php if ($user->role == 1) {echo '<span class="badge bg-blue">Direksi</span>';} ?>
															</div>
														</div>
														<!-- end assignee -->
													</div>
													<!-- end col -->
								
													<div class="col-md-4">
														<!-- assignee -->
														<p class="mt-2 mb-1 text-muted">Username</p>
														<div class="d-flex align-items-start">
															<i class="mdi mdi-account-outline font-18 text-success me-1"></i>
															<div class="w-100">
																<h5 class="mt-1 font-size-14">
																	<?= $user->username ?>
																</h5>
															</div>
														</div>
														<!-- end assignee -->
													</div>
								
													<div class="col-md-4">
														<!-- assignee -->
														<p class="mt-2 mb-1 text-muted">NPK</p>
														<div class="d-flex align-items-start">
															<i class="mdi mdi-account-outline font-18 text-success me-1"></i>
															<div class="w-100">
																<h5 class="mt-1 font-size-14">
																	<?= $user->No_NPK ?>
																</h5>
															</div>
														</div>
														<!-- end assignee -->
													</div>
													<!-- end col -->
												</div>
												<!-- end row -->

												<div class="row">
													<div class="col-md-4">
														<!-- assignee -->
														<p class="mt-2 mb-1 text-muted">Divisi</p>
														<div class="d-flex align-items-start">
															<i class="mdi mdi-account-outline font-18 text-success me-1"></i>
															<div class="w-100">
																<h5 class="mt-1 font-size-14">
																	<?php foreach ($divisi as $key => $value) ?>
																	<?php if($value->Id_Divisi==$user->Id_Divisi )?><?= $value->Nama_Divisi ?>
																<!-- <?= $user->Nama_Divisi ?> -->
																</h5>
															</div>
														</div>
														<!-- end assignee -->
													</div>
													<!-- end col -->
								
													<div class="col-md-4">
														<!-- start due date -->
														<p class="mt-2 mb-1 text-muted">Departemen</p>
														<div class="d-flex align-items-start">
															<i class="mdi mdi-phone font-18 text-success me-1"></i>
															<div class="w-100">
																<h5 class="mt-1 font-size-14">
																<?php foreach ($departemen as $key => $value) ?>
																<?php if($value->Id_Departemen==$user->Id_Departemen )?><?= $value->Nama_Departemen ?>
																	<!-- <?= $user->Nama_Departemen ?> -->
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
																	<?= $user->email ?>
																</h5>
															</div>
														</div>
														<!-- end due date -->
													</div>
													<!-- end col -->
												</div>
												<!-- end row -->
											</div>
										</div>

										<div class="row">
											<div class="col-12 d-grid">
												<a href="<?php echo base_url('home/profil_update/'.$user->id) ?>" class="btn btn-outline-primary waves-effect waves-light m-2"><i class="mdi mdi-account-cog"></i>&nbsp;&nbsp;Ubah Profil</a>
											</div>
										</div>

									</div>
								</div> <!-- end card-->
							</div>
                        </div> <!-- end col-->

						
                    </div>
                    <!-- end row-->
                    
                </div> <!-- container -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

