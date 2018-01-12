<div class="content-wrapper">

    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA USER</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                <table class='table table-bordered>'        

                       <tr><td width='200'>Nama Lengkap <?php echo form_error('full_name') ?></td><td><input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" value="<?php echo $full_name; ?>" /></td></tr>
                    <tr><td width='200'>Email <?php echo form_error('email') ?></td><td>

                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td></tr>

                    <?php
                    if ($this->uri->segment(2) == 'create') {
                        ?>

                        <tr><td width='200'>Password <?php echo form_error('password') ?></td><td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /></td></tr>
                        <?php
                    }
                    ?>


                    <tr><td width='200'>Level User <?php echo form_error('id_user_level') ?></td><td>
                            <?php echo cmb_dinamis('id_user_level', 'tbl_user_level', 'nama_level', 'id_user_level', $id_user_level,'DESC') ?>
                            <!--<input type="text" class="form-control" name="id_user_level" id="id_user_level" placeholder="Id User Level" value="<?php echo $id_user_level; ?>" />--></td></tr>
                    <tr><td width='200'>Status Aktif <?php echo form_error('is_aktif') ?></td><td>
                            <?php echo form_dropdown('is_aktif', array('y' => 'AKTIF', 'n' => 'TIDAK AKTIF'), $is_aktif, array('class' => 'form-control')); ?>
                            <!--<input type="text" class="form-control" name="is_aktif" id="is_aktif" placeholder="Is Aktif" value="<?php echo $is_aktif; ?>" />--></td></tr>
                    <tr><td width='200'>Foto Profile <?php echo form_error('images') ?></td><td> <input type="file" name="images"></td></tr>
                    <tr><td></td><td><input type="hidden" name="id_users" value="<?php echo $id_users; ?>" /> 
                            <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('user') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
                </table></form>        </div>
</div>
</div>