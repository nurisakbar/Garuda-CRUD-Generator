<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbl_menu List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Title</th>
		<th>Url</th>
		<th>Icon</th>
		<th>Is Main Menu</th>
		<th>Is Aktif</th>
		
            </tr><?php
            foreach ($kelolamenu_data as $kelolamenu)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kelolamenu->title ?></td>
		      <td><?php echo $kelolamenu->url ?></td>
		      <td><?php echo $kelolamenu->icon ?></td>
		      <td><?php echo $kelolamenu->is_main_menu ?></td>
		      <td><?php echo $kelolamenu->is_aktif ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>