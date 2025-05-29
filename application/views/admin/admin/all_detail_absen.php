<div class="content-wrapper">
	<section class="content">

<div class="row">  
    <div class="col-md-12">
<div class="box box-primary">
            <div class="box-body"> 
            <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/all_detail_absen';?>">
               <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="tanggalcari" name="rangetanggal" placeholder="Filter Tanggal">
 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <span class="input-group-btn">
                      <button type="submit" name="filtertgl" class="btn btn-primary btn-flat">Submit</button>
                    </span>
              </div>
              
    </form>
</div>
</div>
</div>
<div class="col-lg-12">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Log Capture</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>                  
                  <th>Tanggal & Jam</th>
                  <th>Lokasi</th>
                  <th>Foto</th>
                </tr>
                </thead>
                <tbody>
            <?php $i = 0;	while ( $i < sizeof($absen)) { ?>                    
                <tr>
                  <td><?php echo $i+1;?></td>
                  <td><b><?php echo $absen[$i]['NAMA'];?></b></td>                  
                  <td><b><?php echo date("d-m-Y", strtotime($absen[$i]['TANGGAL']));?> <?php echo $absen[$i]['JAM'];?></b></td>
                  <td><?php echo $absen[$i]['IP']." - ".$absen[$i]['LOKASI'];?> <a href="<?php echo "https://www.google.com/maps/place/".$absen[$i]['GPS'];?>" target="_BLANK" class="badge bg-red"><i class="fa fa-map-o"></i></a>
                  <?php echo "<br>".$absen[$i]['AGENT'];?>
                  </td>
                  <td><img width="200" src="<?php echo base_url().'assets/upload/'.$absen[$i]['GAMBAR'];?>"/></td>
            <?php $i++; } ?>                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
    </div>

</div>

</section>
</div>	

