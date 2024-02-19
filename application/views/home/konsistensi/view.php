
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="container mt-5">

                <!-- Start Content-->
                <div class="container-fluid mt-5">
                        
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
                                                    <h3>Kelola Master Konsistensi</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-lg-end my-1 my-lg-0">
                                                        <a class="btn btn-primary rounded-pill waves-effect waves-light" href="<?= base_url('home/add_konsistensi') ?>">
                                                            <i class="mdi mdi-plus me-1"></i>
                                                            Tambah
                                                        </a>
                                                    </div>
                                                </div><!-- end col-->
                                            </div> <!-- end row --><hr>

                                            <thead>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>Nama Atasan</th>
                                                <th>NPK</th>
                                                <th>Divisi</th>
                                                <th>Departemen</th>
                                                <th>Tanggal</th>
                                                <th>Berkas File</th>
                                                <th class="text-center">AKSI</th>
                                            </thead>
                                        
                                            <tbody>

                                                <?php
                                                    $no=1; 
                                                    foreach ($konsistensi as $key => $value){ ?>
                                                <tr>
                                                    <td><?= $no++ ?> </td>
                                                    <td><?= $value->nama ?></td>
                                                    
                                                    <td style="text-align:center"><?php echo $value->Nama_Atasan ?></td>
                                                    <td style="text-align:center"><?php echo $value->No_NPK ?></td>
                                                    <td style="text-align:center"><?php echo $value->Nama_Divisi ?></td>
                                                    <td style="text-align:center"><?php echo $value->Nama_Departemen ?></td>
                                                    <td><?= $value->tanggal ?></td>
                                                    <td  class="text-center">
                                                        <!-- <?php if ($value->gambar == null){ ?>
                                                            <img src="<?= base_url('assets/image/master/all/Camera_Green.svg')?>" class="img-fluid avatar-sm rounded">
                                                        <?php } else { ?>
                                                            <img src="<?= base_url('assets/image/master/bank/'.$value->gambar)?>" class="img-fluid avatar-sm rounded">
                                                        <?php } ?> -->
                                                        <a href="<?= base_url() ?>assets/image/master/bank/<?= $value->gambar ?>"><?= $value->gambar ?></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('home/update_konsistensi/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a href="<?= base_url('home/delete_konsistensi/'.$value->id) ?>" onclick="return confirm('Yakin ingin hapus data ini?')">
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


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->