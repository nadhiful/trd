<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/backend/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/backend/js/adminlte.min.js') ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/backend/js/demo.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/js/pages/dashboard2.js') ?>"></script>
<!-- jQuery -->

<!-- DataTables -->
<script src="<?php echo base_url('assets/backend/plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<!-- PAGE SCRIPTS -->

</body>
</html>