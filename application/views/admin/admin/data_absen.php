<div class="content-wrapper">
	<section class="content">

<div class="row">  
<div class="col-md-12">
<div class="box box-primary">
            <div class="box-body"> 
            <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_absen';?>">
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
              <h3 class="box-title">Absensi Log</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Jam Masuk|Keluar</th>
                  <th>Absen Masuk|Pulang</th>
                  <th>Terlambat|Pulang Cepat</th>
                  <th>#</th>
                </tr>
                </thead>
                <tbody>
            <?php $i = 0;	while ( $i < sizeof($log)) { 
            $data_masuk=$this->M_database->query_dataid($log[$i]['ID_MASUK'],"data_absen");
            $data_keluar=$this->M_database->query_dataid($log[$i]['ID_KELUAR'],"data_absen");
            ?>                    
                <tr>
                  <td><span class="badge bg-purple"><?php echo date("d-m-Y", strtotime($log[$i]['TANGGAL']));?></span></td>
                  <td><span class='badge bg-green'><?php echo $log[$i]['JAM_MASUK']."|".$log[$i]['JAM_KELUAR'];?></span></td>
                  <td><span class='badge bg-blue'><?php echo date("H:i:s", strtotime($log[$i]['ABSEN_MASUK']))."|".date("H:i:s", strtotime($log[$i]['ABSEN_KELUAR']));?></span></td>
                  <td><span class='label label-danger'><?php echo $log[$i]['TERLAMBAT']!="" ? $log[$i]['TERLAMBAT']:'-';?></span>|<span class='label label-danger'><?php echo $log[$i]['PULANG_CEPAT']!="" ? $log[$i]['PULANG_CEPAT']:'-';?></span></td>
                  <td><a href="#" data-toggle="modal" data-target="#list<?php echo $log[$i]['ID'];?>" class="badge bg-maroon"><i class="fa fa-bars"></i> Detail</a></td>
               

<div class="modal modal-default fade" id="list<?php echo $log[$i]['ID'];?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Info Absensi</h4>
                                        </div>
                                        <div class="modal-body">
<b class="badge bg-blue">Info Masuk</b>
<p><?php echo $log[$i]['KETERANGAN_MASUK'];?></p>
<b class="badge bg-blue">Info Keluar</b>
<p><?php echo $log[$i]['KETERANGAN_KELUAR'];?></p>
<b class="badge bg-red">Foto & Lokasi</b>
<p><?php echo $data_masuk[0]['IP'].' - '.$data_masuk[0]['LOKASI'];?></p>
<p><img width="200" src="<?php echo base_url().'assets/upload/'.$data_masuk[0]['GAMBAR'];?>"/></p>
<p><?php echo $data_keluar[0]['IP'].' - '.$data_keluar[0]['LOKASI'];?></p>
<p><img width="200" src="<?php echo base_url().'assets/upload/'.$data_keluar[0]['GAMBAR'];?>"/></p>


            
                                    </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->                      
                  
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

