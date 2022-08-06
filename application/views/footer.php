</div>
	</div>
	<!-- js -->
    <script src="<?php echo base_url() ?>assets/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/scripts/layout-settings.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
  <!-- buttons for Export datatable -->
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="<?php echo base_url() ?>assets/src/plugins/datatables/js/vfs_fonts.js"></script>
  	<!-- Datatable Setting js -->
	<script src="<?php echo base_url() ?>assets/vendors/scripts/datatable-setting.js"></script>
    <script>
            var ps = new PerfectScrollbar('#sidebar');
            $(document).ready(function() {
                $('#example').DataTable({
                    "paging":   false,
                    "ordering": false
                } );
            } );
            function hapus() {
            confirm("Yakin Ingin Menghapus data?");
            }
        </script>
</body>
</html>