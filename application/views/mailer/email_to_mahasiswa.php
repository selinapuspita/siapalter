<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Submit Laporan Mahasiswa</title>
    <style>
    	body{font-family:"Droid Serif"; font-size:14px;}
    	.sidebar-menu{ font-size:13px; }
    	h1, h2, h3, h4, h5, h6{font-family:"Droid Serif";}
    	h5{ font-weight:bold; }
    </style> 
</head>
<body>
<h3>Notifikasi Feedback Laporan Mahasiswa <?php echo $mahasiswa;?></h3>
<br>
<table border=2>
 	<tr><td>Nama Mahasiswa</td><td><b><?php echo $mahasiswa;?></b></td></tr>
 	<tr><td>Dosen</td><td><b><?php echo $dosen;?></b></td></tr>
 	<tr><td>Judul Laporan</td><td><b><?php echo $judul;?></b></td></tr>
 	<tr><td>Kelompok</td><td><b><?php echo $kelompok;?></b></td></tr> 	
 	<tr><td>Kategori</td><td><b><?php echo $kategori;?></b></td></tr> 	
 	</table><br><br><br>
<i>*Silahkan Cek Feedback dan Nilai Laporan di <a href="<?php echo base_url();?>">disini</a></i>
Terima Kasih,<br><br><br>
<br>

 	
 	</body>
</html>