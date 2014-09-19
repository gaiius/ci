<html>
	<head>
		<title><?php echo $judul; ?></title>
		<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1><?php echo $judul; ?></h1>
		<hr>
		<a href="<?php echo site_url ('crud/tambah')?>">[ Tambah ]</a>
		<table cellpadding="5" cellspacing="5" width="100%" style="font-weight:bold;font-size:13px;">
			<tr>
				<th id="judul">kode_barang</td>
				<th id="judul">chasis</td>
				<th id="judul">type</td>
				<th id="judul">spec</td>
				<th id="judul">nama_barang</td>
				<th id="judul">qty</td>
				<th id="judul">harga</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->kode_barang; ?></td>
				<td class="hd"><?php echo $a->chasis; ?></td>
				<td class="hd"><?php echo $a->type; ?></td>
				<td class="hd"><?php echo $a->spec; ?></td>
				<td class="hd"><?php echo $a->nama_barang; ?></td>
				<td class="hd"><?php echo $a->qty; ?></td>
				<td class="hd"><?php echo $a->harga; ?></td>
				<td class="hd"><a href="<?php echo site_url ('crud/edit/'.$a->idbarang)?>"><input type="submit" value="Edit" class="submitButton"></a></td><td class="hd">
				<a href="<?php echo site_url ('crud/hapus/'.$a->idbarang)?>"><input type="submit" value="Delete" class="submitButton"></a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			
		</p>
	</body>
</html>
