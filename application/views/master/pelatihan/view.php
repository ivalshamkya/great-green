
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card mt-3">
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

                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <h3>Kelola Master Pelatihan</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-lg-end my-1 my-lg-0">
                                                        <a class="btn btn-primary rounded-pill waves-effect waves-light" href="<?= base_url('master_pelatihan/add') ?>">
                                                            <i class="mdi mdi-plus me-1"></i>
                                                            Tambah
                                                        </a>
                                                    </div>
                                                </div><!-- end col-->
                                            </div> <!-- end row --><hr>

                                            <thead>
                                                <th>NO</th>
                                                <th>NAMA</th>
                                                <th>TANGGAL</th>
                                                <th>MENTOR</th>
                                                <th class="text-center">BUKA TUTUP</th>
                                                <th class="text-center">AKSI</th>
                                            </thead>
                                        
                                            <tbody>

                                                <?php
                                                    $no=1; 
                                                    foreach ($pelatihan as $key => $value){ ?>
                                                <tr>
                                                    <td><?= $no++ ?> </td>
                                                    <td><?= $value->nama ?></td>
                                                    <td><?= $value->tanggal ?></td>
                                                    <td><?= $value->mentor ?></td>
                                                    <td class="text-center">
                                                        <?php if ($value->buka_tutup == 1) { ?>
                                                            <a href="<?= base_url('master_pelatihan/tutup/'.$value->id) ?>" onclick="return confirm('Yakin ingin menutup pelatihan?')">
                                                                <div class="btn btn-outline-primary rounded-pill waves-effect waves-light">
                                                                    <i class="fa fa-lock-open"></i> 
                                                                </div>
                                                            </a>   
                                                        <?php } else { ?>
                                                            <a href="<?= base_url('master_pelatihan/buka/'.$value->id) ?>" onclick="return confirm('Yakin ingin membuka pelatihan?')">
                                                                <div class="btn btn-outline-danger rounded-pill waves-effect waves-light">
                                                                    <i class="fa fa-lock"></i> 
                                                                </div>
                                                            </a>   
                                                        <?php } ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('master_pelatihan/detail/'.$value->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                        <a href="<?= base_url('master_pelatihan/update/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a href="<?= base_url('master_pelatihan/delete/'.$value->id) ?>" onclick="return confirm('Yakin ingin hapus data ini?')">
                                                            <div class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i> 
                                                            </div>
                                                        </a>                                    
                                                    </td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div> <!-- end card body-->

                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                        
                    </div> <!-- container -->

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