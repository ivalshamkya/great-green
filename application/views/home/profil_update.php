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
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('home/profil/'. $user->id) ?>"><i class="fa fa-chevron-circle-left"></i> Kembali</a></button></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profil Update</h4>
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
										//notifikasi gagal upload
										if (isset($error_upload)) {
											echo '
											<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
												<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
											'.$error_upload.'</div>';   
										}
										
										echo form_open_multipart('home/profil_update/'.$user->id);?>

											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label">Username<span style="color: red">*</span></label>
														<input type="text" class="form-control<?php if(form_error('username')!=null){echo ' is-invalid';} ?>" name="username" placeholder="Username.." value="<?= $user->username ?>" readonly>
														<small class="form-text text-danger"><?= form_error('username') ?></small>
													</div>
												</div>

												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label">Password<span style="color: red">*</span></label>
														<div class="input-group input-group-merge">
															<input type="password" class="form-control<?php if(form_error('password')!=null){echo ' is-invalid';} ?>" name="password" placeholder="Enter your password" value="<?= $user->password ?>">
															<div class="input-group-text" data-password="false">
																<span class="password-eye"></span>
															</div>
														</div>
														<small class="form-text text-danger"><?= form_error('password') ?></small>
													</div>
												</div>
											</div>

											<div class="form-group mt-3">
												<label class="control-label">Nama Lengkap<span style="color: red">*</span></label>
												<input type="text" class="form-control<?php if(form_error('nama')!=null){echo ' is-invalid';} ?>" name="nama" placeholder="Nama.." value="<?= $user->nama ?>">
												<small class="form-text text-danger"><?= form_error('nama') ?></small>
											</div>

											<div class="row mt-3">
												<div class="col-lg-6">
													<div class="form-group">
													<label class="control-label">Divisi<span style="color: red">*</span></label>
														<select class="form-select <?php if(form_error('Id_Divisi')!=null){echo ' is-invalid';} ?>" name="Id_Divisi">
															<option disabled selected>Pilih Kategori</option>
															<?php foreach ($divisi as $key => $value) { ?>
																<option value="<?= $value->Id_Divisi ?>" <?php if($value->Id_Divisi==$user->Id_Divisi ) echo 'selected="selected"'; ?>><?= $value->Nama_Divisi ?></option>
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
															<option value="<?= $value->Id_Departemen ?>" <?php if($value->Id_Departemen==$user->Id_Departemen ) echo 'selected="selected"'; ?>><?= $value->Nama_Departemen ?></option>
														<?php } ?>
														</select>
														<small class="form-text text-danger"><?= form_error('Id_Departemen') ?></small>
													</div>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label">NPK<span style="color: red">*</span></label>
														<input type="number" class="form-control<?php if(form_error('No_NPK')!=null){echo ' is-invalid';} ?>" name="No_NPK" placeholder="No NPK.." value="<?= $user->No_NPK ?>">
														<small class="form-text text-danger"><?= form_error('No_NPK') ?></small>
													</div>
												</div>

												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label">Email<span style="color: red">*</span></label>
														<input type="text" class="form-control<?php if(form_error('email')!=null){echo ' is-invalid';} ?>" name="email" placeholder="Email.." value="<?= $user->email ?>">
														<small class="form-text text-danger"><?= form_error('email') ?></small>
													</div>
												</div>
											</div>

											<div class="form-group mt-3">
												<label class="control-label">Foto</label>
												<input type="file" name="foto_profil" class="form-control mb-3" id="preview_gambar">
											</div>

											<div class="col-lg-12 text-center mt-4 mb-4">
												<?php if ($user->foto_profil == null){ ?>
													<img src="<?= base_url('assets/image/master/all/Profile_Green.svg')?>" id="gambar_load" width="300px" height="300px">
												<?php } else { ?>
													<img src="<?= base_url('assets/image/profile/'.$user->foto_profil)?>" id="gambar_load" width="300px" height="300px">
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
                    </div>
                    <!-- end row-->
                    
                </div> <!-- container -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

