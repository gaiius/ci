<html>
	<head>
	<title><?php echo"$judul"; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo"$judul";?></h1>
		<hr>
		<fieldset>
			<legend><h3>Add New Siswa</h3></legend>
			<form method="POST" action="<?php echo site_url('crud/proses_tambah'); ?>">
				<input type="text" name="kode_barang" placeholder="kode_barang"/>
				<input type="text" name="chasis" placeholder="chasis"/>
				<input type="text" name="type" placeholder="type"/>
				<input type="text" name="spec" placeholder="spec"/>
				<input type="text" name="nama_barang" placeholder="nama_barang"/>
				<input type="text" name="qty" placeholder="qty"/>
				<input type="text" name="harga" placeholder="harga"/>
				<input type="submit" name="simapn" value="Simpan" class="submitButton">
				<a href="<?php echo site_url ('crud');?>">[ Home ]</a>
			</form>
		</fieldset>
		<hr>
	
	</body>
</html>
