            <!-- ======= Footer ======= -->
            <section class="section-footer mt-4">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget-a">
                                <div class="w-header-a">
                                    
                                    <a class="navbar-brand text-brand" href="<?= base_url(); ?>Home"><img src="<?= base_url(); ?>/assets/template/admin/images/logosdg-dark.png" alt="" height="60"></a>
                                </div>
                                <div class="w-body-a mt-1">
                                    <!-- deskripsi dinamis -->
                                    <?php 
                                        $setting = $this->m_setting->get_setting();
                                        foreach ($setting as $key => $value) {
                                            if($value->kode == 'deskripsi') { 
                                    ?>
                                    <p class="w-text-a color-text-a">
                                        <?= $value->konten ?>
                                    </p>
                                    <?php }} ?>
                                    <!-- end logo dinamis -->
                                </div>
                                <div class="w-footer-a">
                                    <ul class="list-unstyled">
                                        <li class="color-a">
                                            <i class="mdi mdi-phone font-16 text-primary me-1"></i><b class="text-primary">021 1111 2222 3333</b> 
                                        </li>
                                        <li class="color-a">
                                            <i class="mdi mdi-email-outline font-16 text-primary me-1"></i><b class="text-primary">sdgs@gmail.com</b> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                        </div>

                        <div class="col-md-2 section-md-t3">
                            <div class="widget-a">
                                <div class="w-header-a">
                                    <h3 class="w-title-a text-brand"><b>Menu</b></h3>
                                </div>
                                <div class="w-body-a">
                                    <div class="w-body-a">
                                        <ul class="list-unstyled">
                                            <li class="item-list-a">
                                                <i class="bi bi-chevron-right"></i> <a href="<?= base_url('home'); ?>"><b>Beranda</b></a>
                                            </li>
                                            <li class="item-list-a">
                                                <i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/konsistensi'); ?>"><b>Konsistensi EH</b></a>
                                            </li>
                                            <li class="item-list-a">
                                                <i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/blog'); ?>"><b>Data EH</b></a>
                                            </li>
                                            <li class="item-list-a">
                                                <i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/sampah'); ?>"><b>Waste Sampah</b></a>
                                            </li>
                                            <li class="item-list-a">
                                                <i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/tentang');?>"><b>Tentang</b></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 section-md-t3">
                            <div class="widget-a">
                                <div class="w-header-a">
                                    <h3 class="w-title-a text-brand"><b>Cabang</b></h3>
                                </div>
                                <div class="w-body-a">
                                    <ul class="list-unstyled">
                                        <li class="item-list-a">
                                        <i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/cabang'); ?>"><b>Cabang</b></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright-footer">
                                <p class="copyright color-text-a">
                                &copy; Copyright 
                                <span class="color-a">Great Green x</span> Politeknik Astra.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- End  Footer -->

        </div>
        <!-- END wrapper -->

   
        <!-- ubold template -->
        <!-- Vendor js -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/app.min.js"></script>

        <!-- Plugins js-->
        <script src="<?= base_url(); ?>/assets/template/admin/libs/flatpickr/flatpickr.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/apexcharts/apexcharts.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/selectize/js/standalone/selectize.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/pages/dashboard-1.init.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/js/pages/datatables.init.js"></script>
        <script src="<?= base_url(); ?>/assets/template/admin/js/pages/form-pickers.init.js"></script>

        <!-- SweetAlert2 -->
        <script src="<?= base_url(); ?>/assets/template/admin/libs/sweetalert2/sweetalert2.min.js"></script>

        <?php 
            $i = 1;
            $tot_berat = 0;
            foreach ($this->cart->contents() as $items){ 
                $produk = $this->m_home->get_data_by_id($items['id']);
                $berat = $items['qty'] * $produk->berat;
                $tot_berat = $tot_berat + $berat;
                $i++; 
            }
        ?>

        <script>
            $(document).ready(function(){
                //add data to select provinsi
               $.ajax({
                    type: "POST",
                    url: "<?= base_url('rajaongkir/provinsi') ?>",
                    success: function(hasil_provinsi){
                        $("select[name=provinsi]").html(hasil_provinsi);
                    }
               });

               //add data to select provinsi
               $("select[name=provinsi]").on("change", function() {
                    var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/kota') ?>",
                        data: 'id_provinsi=' + id_provinsi_terpilih,
                        success: function(hasil_kota){
                            $("select[name=kota]").html(hasil_kota);
                        }
                    });
                });

                //add data to select expedisi
               $("select[name=kota]").on("change", function() {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/expedisi') ?>",
                        success: function(hasil_expedisi){
                            $("select[name=expedisi]").html(hasil_expedisi);
                        }
                    });
                });

                 //add data to select paket
               $("select[name=expedisi]").on("change", function() {
                    //mendapatkan expedisi terpilih
                    var expedisi_terpilih = $("select[name=expedisi]").val()
                    //mendapatkan id kota tujuan terpilih
                    var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
                    //mengambil data ongkos kirim
                    var total_berat = <?= $tot_berat ?>;
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/paket') ?>",
                        data : 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
                        success: function(hasil_paket){
                            $("select[name=paket]").html(hasil_paket);
                        }
                    });
                });

                 //ubah total ongkir
               $("select[name=paket]").on("change", function() {
                    var dataongkir = $("option:selected", this).attr('ongkir');
                    var reverse = dataongkir.toString().split('').reverse().join(''),
                        ribuan_ongkir = reverse.match(/\d{1,3}/g);
                    ribuan_ongkir = ribuan_ongkir.join('.').split('').reverse().join('');
                    $("#ongkir").html("Rp. " + ribuan_ongkir)

                    var total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
                    var reverse2 = total_bayar.toString().split('').reverse().join(''),
                        ribuan_totalbayar = reverse2.match(/\d{1,3}/g);
                    ribuan_totalbayar = ribuan_totalbayar.join('.').split('').reverse().join('');
                    $("#total_bayar").html("Rp " + ribuan_totalbayar)

                    //estimasi dan ongkir
                    var estimasi = $("option:selected", this).attr('estimasi');
                    $("input[name=estimasi]").val(estimasi);
                    $("input[name=ongkir]").val(dataongkir);
                    $("input[name=total_bayar]").val(total_bayar);
                });
            });

            //admin
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                
                $('.swalDefaultSuccess').click(function() {
                    Toast.fire({
                        icon: 'success',
                        title: '&nbsp; Berhasil Ditambah ke Keranjang'
                    })
                });
            });

            // untuk cek/preview gambar
            function bacaGambar(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#gambar_load').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#preview_gambar").change(function(){
                bacaGambar(this);
            });

            $(function() {
                $(document).ready(function() {
                    $('table.display').DataTable();
                } );
            });

            //tooltip
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

        </script>

    </body>

</html>