<script>
    const base_url = "<?= base_url(); ?>";
</script>
<!-- jQuery -->
<script src="<?= media(); ?>/js/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= media(); ?>/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Data Table -->
<script src="<?= media(); ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= media(); ?>/js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= media(); ?>/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= media(); ?>/js/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= media(); ?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= media(); ?>/js/demo.js"></script>


<!-- SweetAlert-->
<script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/bootstrap-select.min.js"></script>
<!-- Para exportar datos a excel -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

<!-- The javascript plugin to display page loading on top-->
<script src="<?= media(); ?>/js/plugins/pace.min.js"></script>

<script type="text/javascript" src="<?= media(); ?>/js/functions_admin.js"></script>

<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>


</body>
</html>