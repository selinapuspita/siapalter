 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename='Laporan Patroli Pos '.$tgl1'-'$tgl2.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>

<center><h1>LAPORAN PATROLI POS</h1></center>
<h5><br>
<i><?php echo 'TANGGAL : '.date ("d M Y", strtotime($tgl1)).' - '.date ("d M Y", strtotime($tgl2));?></i>
</h5>

<table width="100%" class="table table-striped table-bordered table-hover" border="1" id="dataTablesabk">
    <thead>
       <tr>
        <th>No</th>
        <th>NAMA</th>
        <th>TANGGAL</th>
	    <th>JAM</th>
        <th>POS</th>
        <th>KETERANGAN</th> 
      </tr>
    </thead>
    <tbody>
<?php $x = 0;	while($x < sizeof ($rekap)) { ?>
	  <tr>
	  <td><?php echo $x+1;?></td>
        <td><?php echo $rekap[$x]['NAMA'];?></td>
        <td><?php echo $rekap[$x]['TANGGAL'];?></td>
        <td><?php echo $rekap[$x]['JAM'];?></td>
        <td><?php echo $rekap[$x]['POS'];?></td>
		<td><?php echo $rekap[$x]['KETERANGAN'];?></td>		
      </tr>
 <?php 
 $x++;} ?> 
    </tbody>
  </table>

  
