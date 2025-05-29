 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename='Laporan Absensi '.$tgl1'-'$tgl2.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>

<center><h1>LAPORAN ABSENSI</h1></center>
<h5><br>
<i><?php echo 'TANGGAL : '.date ("d M Y", strtotime($tgl1)).' - '.date ("d M Y", strtotime($tgl2));?></i>
</h5>

<table width="100%" class="table table-striped table-bordered table-hover" border="1" id="dataTablesabk">
    <thead>
       <tr>
        <th>No</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>TANGGAL</th>
	    <th>JAM MASUK</th>
        <th>JAM PULANG</th>
        <th>ABSEN MASUK</th>
        <th>KETERANGAN MASUK</th> 
        <th>ABSEN PULANG</th> 
        <th>KETERANGAN PULANG</th> 
        <th>TERLAMBAT</th>
        <th>PULANG CEPAT</th>  
      </tr>
    </thead>
    <tbody>
<?php $x = 0;	while($x < sizeof ($rekap)) { ?>
	  <tr>
	  <td><?php echo $x+1;?></td>
        <td><?php echo $rekap[$x]['NIK'];?></td>
        <td><?php echo $rekap[$x]['NAMA'];?></td>
        <td><?php echo $rekap[$x]['TANGGAL'];?></td>
        <td><?php echo $rekap[$x]['JAM_MASUK'];?></td>
        <td><?php echo $rekap[$x]['JAM_KELUAR'];?></td>
        <td><?php echo $rekap[$x]['ABSEN_MASUK'];?></td>
		<td><?php echo $rekap[$x]['KETERANGAN_MASUK'];?></td>		
        <td><?php echo $rekap[$x]['ABSEN_KELUAR'];?></td>
		<td><?php echo $rekap[$x]['KETERANGAN_KELUAR'];?></td>	
		<td><?php echo $rekap[$x]['TERLAMBAT'];?></td>	
		<td><?php echo $rekap[$x]['PULANG_CEPAT'];?></td>	
      </tr>
 <?php 
 $x++;} ?> 
    </tbody>
  </table>

  
