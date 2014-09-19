<html>
	<head>
	<title><?php echo"$judul"; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Update Data Siswa</h3></legend>
			<form method="POST" action="<?php echo site_url('crud/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="idbarang" value="<?php echo($a->idbarang);?>"/>
					<input type="text" name="kode_barang" value="<?php echo $a->kode_barang;?>"/>
					<input type="text" name="type" value="<?php echo $a->type;?>"/>
					<input type="text" name="spec" value="<?php echo $a->spec;?>"/>
					<input type="text" name="nama_barang" value="<?php echo $a->nama_barang;?>"/>
					<input type="text" name="qty" value="<?php echo $a->qty;?>"/>
					<input type="text" name="harga" value="<?php echo $a->harga;?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
					<a href="<?php echo site_url ('crud');?>">[ Home ]</a></td>
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
