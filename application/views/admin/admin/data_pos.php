<div class="content-wrapper">
	<section class="content">

<div class="row">  

<?php if (ISSET($_GET['edit'])){?>
<div class="col-lg-4">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Edit Checkpoint</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_pos';?>">
                <div class="form-group">
                  <label for="namalengkap">Nama Checkpoint<span>*</span></label>
				  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
             <input type="text" class="form-control" required name="pos" value="<?php echo $editdosen[0]['NAMAPOS'];?>">
                </div> </div>
                
      <div class="form-group">
                  <label for="email">Lokasi<span>*</span></label>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" required name="lokasi" value="<?php echo $editdosen[0]['LOKASI'];?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $editdosen[0]['ID'];?>">
                <input type="hidden" class="form-control" name="pos_old" value="<?php echo $editdosen[0]['NAMAPOS'];?>">                
              </div></div>

                     
        <div class="box-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
             <input type="submit" class="btn btn-success" name="editadmin" value="EDIT POS">
              </div>
 </form>	                

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
    </div>
<?php } else {?>

<div class="col-lg-4">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Tambah Checkpoint</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_pos';?>">
                <div class="form-group">
                  <label for="namalengkap">Nama Checkpoint<span>*</span></label>
				  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
             <input type="text" class="form-control" required name="pos" placeholder="Toilet Basement">
                </div> </div>
                
      <div class="form-group">
                  <label for="email">Lokasi <span>*</span></label>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" required name="lokasi" id="email" placeholder="Nama Lokasi Project">
              </div></div>
                
        <div class="box-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
             <input type="submit" class="btn btn-success" name="submitpos" value="TAMBAH CHECKPOINT">
              </div>
 </form>	                

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
    </div>

<?php } ?>
    
<div class="col-lg-8">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Checkpoint</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                <thead>
                <tr>
                  <th>NAMA CHECKPOINT</th>
                  <th>LOKASI</th>
                  <th>KODE QR</th>
                  <th><i class="fa fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
            <?php $i = 0;	while ( $i < sizeof($admin)) { ?>                    
                <tr>
                  <td><?php echo $admin[$i]['NAMAPOS'];?></td>
                  <td><?php echo $admin[$i]['LOKASI'];?></td>
                  <td><image src="<?php echo base_url().'assets/qrcode/'.$admin[$i]['CODE'].'.png';?>" width="100">
                      <br><a href="<?php echo base_url().'assets/qrcode/'.$admin[$i]['CODE'].'.png';?>" download="<?php echo $admin[$i]['NAMAPOS'];?>.png" class="btn bg-purple">Download</a>
                  </td>
                  <td><a href="<?php echo base_url().'Manage_app/data_pos?edit='.$admin[$i]['ID'];?>" class="label label-primary"><i class="fa fa-edit"></i></a>
                </tr>
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

