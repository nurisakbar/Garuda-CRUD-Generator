<?php
$string = "
<div class=\"content-wrapper\">
	
	<section class=\"content\">
		<div class=\"box box-warning box-solid\">
			<div class=\"box-header with-border\">
				<h3 class=\"box-title\">DETAIL DATA ".  strtoupper($table_name)."</h3>
			</div>
		
		<table class='table table-bordered'>        
";
foreach ($non_pk as $row) {
	$string .= "\n\t
			<tr>
				<td>".label($row["column_name"])."</td>
				<td><?php echo $".$row["column_name"]."; ?></td>
			</tr>";
}
$string .= "\n\t
			<tr>
				<td></td>
				<td><a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Kembali</a></td>
			</tr>";
$string .= "\n\t
		</table>
		</div>
	</section>
</div>";

$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);
?>
