<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_POLIKLINIK</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Nama Poliklinik <?php echo form_error('nama_poliklinik') ?></td><td><input type="text" class="form-control" name="nama_poliklinik" id="nama_poliklinik" placeholder="Nama Poliklinik" value="<?php echo $nama_poliklinik; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id_poliklinik" value="<?php echo $id_poliklinik; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('poliklinik') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>