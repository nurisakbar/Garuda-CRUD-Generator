<div class="content-wrapper">
    <section class="content">
        <?php echo alert('alert-info', 'Selamat', 'Data Berhasil Diperbaharui')?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">CONTOH HELPER TAMBAHAN</h3>
                    </div>

                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr><td width="150">Autocomplate</td><td><input type="text" id="name_user" name="product" class="form-control ui-autocomplete-input" placeholder="Masukan Nama user ..."></td></tr>
                            <tr><td>Select2</td><td><?php echo select2_dinamis('test', 'tbl_user', 'full_name', 'Masukan keyword ...') ?></td></tr>
                            <tr><td>Datalist</td><td><?php echo datalist_dinamis('test', 'tbl_user', 'full_name') ?></td></tr>
                            <tr><td>Combobox</td><td><?php echo cmb_dinamis('test', 'tbl_user', 'full_name', 'id_users') ?></td></tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>

<script type="text/javascript">
    $(function() {
        //autocomplete
        $("#name_user").autocomplete({
            source: "<?php echo base_url()?>/index.php/welcome/autocomplate",
            minLength: 1
        });				
    });
</script>