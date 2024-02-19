</div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>/assets/template/admin/js/app.min.js"></script>

        <!-- Validation init js-->
        <script src="<?= base_url(); ?>/assets/template/admin/js/pages/form-validation.init.js"></script>
       
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
            });

            //notif success add keranjang
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
                        title: '&nbsp; Furniture Ditambah ke Keranjang'
                    })
                });
            });

            //data table
            $(function() {
                $(document).ready(function() {
                    $('table.display').DataTable();
                } );
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

            //tooltip
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
        
    </body>
</html>