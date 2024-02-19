
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
                                                    <h3>Kelola Master Data Earth Hour</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-lg-end my-1 my-lg-0">
                                                        <a class="btn btn-primary rounded-pill waves-effect waves-light" href="<?= base_url('master_blog/add') ?>">
                                                            <i class="mdi mdi-plus me-1"></i>
                                                            Tambah
                                                        </a>
                                                    </div>
                                                </div><!-- end col-->
                                            </div> <!-- end row --><hr>

                                            <thead>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>Shop</th>
                                                <th>Area</th>
                                                <th>Tanggal</th>
                                                <th>Gambar Before</th>
                                                <th>Gambar After</th>
                                                <th>Cost / Thn</th>
                                                <th>Reduce Cost / Thn</th>
                                                <th class="text-center">AKSI</th>
                                            </thead>
                                        
                                            <tbody>

                                                <?php
                                                    $no=1; 
                                                    foreach ($blog as $key => $value){ ?>
                                                <tr>
                                                    <td><?= $no++ ?> </td>
                                                    <td><?= $value->Nama ?></td>
                                                    <td><?= $value->Nama_Shop ?></td>
                                                    <td><?= $value->Area ?></td>
                                                    <td><?= $value->tanggal ?></td>
                                                    <td  class="text-center">
                                                        <?php if ($value->gambar_before == null){ ?>
                                                            <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" class="img-fluid avatar-sm rounded">
                                                        <?php } else { ?>
                                                            <img src="<?= base_url('assets/image/master/blog/'.$value->gambar_before)?>" class="img-fluid avatar-sm rounded">
                                                        <?php } ?>
                                                    </td>
                                                    <td  class="text-center">
                                                        <?php if ($value->gambar_after == null){ ?>
                                                            <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" class="img-fluid avatar-sm rounded">
                                                        <?php } else { ?>
                                                            <img src="<?= base_url('assets/image/master/blog/'.$value->gambar_after)?>" class="img-fluid avatar-sm rounded">
                                                        <?php } ?>
                                                    </td>
                                                    <td><?= $value->total_tco ?></td>
                                                    <td><?= $value->total_reduce_tco ?></td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('master_blog/detail/'.$value->id) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                        <a href="<?= base_url('master_blog/update_page/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a href="<?= base_url('master_blog/delete/'.$value->id) ?>" onclick="return confirm('Yakin ingin hapus data ini?')">
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