<!DOCTYPE html>
<html>
<head>
	<title>CRUD 1301174542</title>
</head>
<body>
	<center><h1>CRUD 1301174542</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $p){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->nama ?></td>
			<td><?php echo $p->alamat ?></td>
			<td><?php echo $p->pekerjaan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$p->id,'Edit'); ?>
                              <?php echo anchor('crud/delete/'.$p->id,'Delete'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<center><?php echo anchor('crud/add','Add Data'); ?></center>
</body>
</html>