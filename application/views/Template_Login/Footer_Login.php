<!-- jQuery -->
<script src="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/AdminLTE-3.2.0/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()
    });
</script>
</body>

</html>